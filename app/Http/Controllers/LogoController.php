<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\LogoModel;
use File;
class LogoController extends Controller
{
     public function index(){
    $logo_temp =  LogoModel::findOrFail('1');
    return view('admin.logo.logo_list',compact('logo_temp')); }
    public function show($id)
    {
      echo "404";
    }
    public function edit()
    {
    $logo_temp =  LogoModel::findOrFail('1');
    return view('admin.logo.logo',compact('logo_temp'));
    }
    public function update(Request $request)
    {
        $contact_temp =  LogoModel::findOrFail('1');
        if(!empty($request->file('txtlogo'))){
        File::delete(public_path().'/image_upload/logo/'.$request->txtlogo1);
        $file_name = $request->file('txtlogo')->getClientOriginalName();
        $request->file('txtlogo')->move('public/image_upload/logo/', $file_name);
        $contact_temp->image = $file_name;
        }else {
        $contact_temp->image = $request->txtlogo1; }

       	$contact_temp->save();
       	return redirect()->route('admin.changelogo.index')->with(['flash_message'=>'Sửa thành công']);
    }
}
