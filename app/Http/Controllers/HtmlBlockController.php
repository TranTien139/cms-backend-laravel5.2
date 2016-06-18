<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HtmlBlockModel;
class HtmlBlockController extends Controller
{
       public function index()
    { 
      $html_temp = HtmlBlockModel::all();
      return view('admin.htmlblock.htmlblock_list',compact('html_temp'));
    }
    public function create()
    {     
        return view('admin.htmlblock.htmlblock_add');
    }
    public function store(Request $request)
    {   
        $html_temp = new HtmlBlockModel;
        $html_temp->title = $request->txttitle;
        $html_temp->alias = changeTitle($request->txttitle);
        $html_temp->content = $request->txtcontent;
        $html_temp->published = $request->txtpublished;
        $html_temp->save();
        return redirect()->route('admin.htmlblock.index')->with(['flash_message'=>'Thêm thành công']);
    }
    public function show($id)
    {
      echo "404";
    }
    public function edit($id)
    {
    $html_temp =  HtmlBlockModel::findOrFail($id);
    return view('admin.htmlblock.htmlblock_edit',compact('html_temp'));
    }
    public function update($id,Request $request)
    {
        $html_temp =  HtmlBlockModel::findOrFail($id);
        $html_temp->title = $request->txttitle;
        $html_temp->alias = changeTitle($request->txttitle);
        $html_temp->content = $request->txtcontent;
        $html_temp->published = $request->txtpublished;
        $html_temp->save();
       return redirect()->route('admin.htmlblock.index')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {   
    $html_temp =  HtmlBlockModel::findOrFail($id);
    $html_temp->delete();
    return redirect()->route('admin.htmlblock.index')->with(['flash_message'=>'Xóa thành công']);;
	}
}
