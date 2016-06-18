<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Hash;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{	
	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	public function getlogin(){
    	return view('admin.general.index');
    }
    public function getlogout(){
    	Auth::logout();
        return redirect('/admin');
    }
     public function postlogin(UserRequest $request){
      	$remember = (Input::has('txtrememberme'))? true: false;
	 	$auth = array('email' =>$request->txtemail,'password' =>$request->txtpassword,'level' =>'superadmin');
        $auth1 = array('email' =>$request->txtemail,'password' =>$request->txtpassword,'level' =>'admin');
	 	if(Auth::attempt($auth,$remember) || Auth::attempt($auth1,$remember)){
	 		return redirect('/admin');
	 	}else{
	 		return redirect('/admin');
	 	}
     }

     public function getprofile(){
     	return view('admin.general.profile');
     }

     public function index()
    { 
      $user_temp = User::all();
      return view('admin.user.user_list',compact('user_temp'));
    }
    public function create()
    {
        return view('admin.user.user_add');
    }
    public function store(RegisterRequest $request)
    {
        $user_temp = new User;
        $user_temp->email = $request->txtemail;
        $user_temp->password = Hash::make($request->txtpassword);
        $user_temp->fullname = $request->txtfullname;
        $user_temp->birthday = $request->txtbirthday;
        $user_temp->gender = $request->txtgender;
        $user_temp->level = "admin";
        $user_temp->status = "active";
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
        return redirect()->route('admin.user.index')->with(['flash_message'=>'Tạo thành công']);
    }
    public function show($id)
    {
      echo "404";
    }
    public function edit($id)
    {
    $user_temp =  User::findOrFail($id);
    return view('admin.user.user_edit',compact('user_temp'));
    }
    public function update($id,Request $request)
    {
        $user_temp =  User::findOrFail($id);
        $user_temp->email = $request->txtemail;
        $user_temp->fullname = $request->txtfullname;
        $user_temp->birthday = $request->txtbirthday;
        $user_temp->gender = $request->txtgender;
        $user_temp->level = $request->txtlevel;
        $user_temp->status = "active";
        $user_temp->avatar= $request->txtavatar;
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
       return redirect()->route('admin.user.index')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {      
    $user_temp =  User::findOrFail($id);
    if($user_temp->level=='superadmin'){return redirect()->back();}else{
    $user_temp->delete();
    return redirect()->route('admin.user.index')->with(['flash_message'=>'Xóa thành công']);}
    }

    public function changepassword(Request $request){
        $id = $request->txtid;
        $user_temp = User::findOrFail($id);
        if(Hash::check(Input::get('txtold_password'),$user_temp->getAuthPassword()))
        {
        $user_temp->password = Hash::make($request->txtchangepassword);
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
        return Redirect::to('admin/logout');
       }else{
        return Redirect::to('admin');
       }
    }
    
}
