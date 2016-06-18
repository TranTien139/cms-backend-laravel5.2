<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MenuModel;

class MenuController extends Controller
{
     public function index()
    { 
      $menu_temp = MenuModel::all();
      return view('admin.menu.menu',compact('menu_temp'));
    }

    public function create()
    {     
        
    }
    public function store(Request $request)
    {  
        $menu_temp = new MenuModel;
        $menu_temp->title = $request->txttitle;
        $menu_temp->alias = $request->txtalias;
        $menu_temp->parent_id = $request->txtparent_id;
        $menu_temp->order = $request->txtorder;
        $menu_temp->save();
        return redirect()->route('admin.menu.index')->with(['flash_message'=>'Thêm thành công']);
    }
    public function show($id)
    {
      echo "404";
    }
    public function edit($id)
    {
    	
    }
    public function update($id,Request $request)
    {
        $menu_temp =  MenuModel::findOrFail($id);
        $menu_temp->title = $request->txttitle;
        $menu_temp->alias = $request->txtalias;
        $menu_temp->parent_id = $request->txtparent_id;
        $menu_temp->order = $request->txtorder;
        $menu_temp->save();
       	return redirect()->route('admin.menu.index')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {   
    $menu_temp =  MenuModel::findOrFail($id);
    $menu_temp->delete();
    return redirect()->route('admin.menu.index')->with(['flash_message'=>'Xóa thành công']);;
	}
}
