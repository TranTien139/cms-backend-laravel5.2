<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ListTagArticleModel;

class ListTagArticleControler extends Controller
{
     public function index()
    { 
     
    }
    public function create()
    {     
        
    }
    public function store(Request $request)
    {   
        $article_temp = new ListTagArticleModel;
        $article_temp->name = $request->txtname;
        $article_temp->alias = changeTitle($request->txtname);
        $article_temp->save();
        return redirect('admin/article/create')->with(['flash_message'=>'Thêm thành công']);
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
        $article_temp =  ListTagArticleModel::findOrFail($id);
        $article_temp->name = $request->txtname;
        $article_temp->alias = changeTitle($request->txtname);
        $article_temp->save();
       return redirect('admin/article/create')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {   
       
	}
}
