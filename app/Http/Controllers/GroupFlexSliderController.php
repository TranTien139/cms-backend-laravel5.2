<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GroupFlexSliderRequest;
use App\GroupFlexSliderModel;
use App\FlexSliderModel;	
use Input;

class GroupFlexSliderController extends Controller
{
	 public function index()
    { 
      $gslider_temp = GroupFlexSliderModel::all();
      return view('admin.slider.gslider_list',compact('gslider_temp'));
    }
    public function create()
    {
        return view('admin.slider.gslider_add');
    }
    public function store(GroupFlexSliderRequest $request)
    {
        $gslider_temp = new GroupFlexSliderModel;
        $gslider_temp->name = $request->txtname;
        $gslider_temp->published = $request->txtpublished;
        $gslider_temp->save();
        return redirect()->route('admin.groupslider.index')->with(['flash_message'=>'Tạo thành công']);
    }
    public function show($id)
    {
      echo "404";
    }
    public function edit($id)
    {
    $gslider_temp =  GroupFlexSliderModel::findOrFail($id);
    return view('admin.slider.gslider_edit',compact('gslider_temp'));
    }
    public function update($id,GroupFlexSliderRequest $request)
    {
        $gslider_temp =  GroupFlexSliderModel::findOrFail($id);
        $gslider_temp->name = $request->txtname;
        $gslider_temp->published = $request->txtpublished;
        $gslider_temp->save();
       return redirect()->route('admin.groupslider.index')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {      
    $parent  = FlexSliderModel::where('group_id',$id)->count();
    if($parent ==0) 
    {
    $cate1 =  GroupFlexSliderModel::findOrFail($id);
    $cate1->delete();
    return redirect()->route('admin.groupslider.index')->with(['flash_message'=>'Xóa thành công']);
    } else{
        echo "<script type='text/javascript'>
         alert('Bạn không thể xóa mục sản phảm này vì nó chứa mục con !');
        </script>";
    }
    }
}
