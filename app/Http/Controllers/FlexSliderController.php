<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FlexSliderRequest;
use App\FlexSliderModel;
use App\GroupFlexSliderModel;
use Input;
use File;
class FlexSliderController extends Controller
{
      public function index()
    { 
      $slider_temp = FlexSliderModel::all();
      return view('admin.slider.slider_list',compact('slider_temp'));
    }

    public function create()
    {   
        $group_temp = GroupFlexSliderModel::select('id','name')->where('published','yes')->get()->toArray();
        return view('admin.slider.slider_add',compact('group_temp'));
    }
    public function store(FlexSliderRequest $request)
    {  
        $slider = new FlexSliderModel;
        $file_name = $request->file('txtimage')->getClientOriginalName();
        $slider->title= $request->txttitle;
        $slider->alias = changeTitle($request->txttitle);
        $slider->image =  $file_name;
        $slider->order = 0;
        $slider->group_id = $request->txtgroup_id;
        $slider->published = $request->txtpublished;
        $request->file('txtimage')->move('public/image_upload/slider/', $file_name);
        if(Input::hasFile('txtimage_box1')){
        $file_name1 = $request->file('txtimage_box1')->getClientOriginalName();
        $request->file('txtimage_box1')->move('public/image_upload/slider/slider_box/', $file_name1);
        $slider->img_box1 = $file_name1;
        $slider->box1 = $request->txtbox1;
        }
        $slider->save();
        
        
     return redirect()->route('admin.slider.index')->with(['flash_message'=>'Thêm Thành Công']);
    }
    public function show($id)
    {
      echo "404";
    }
    public function edit($id)
    {
    $slider_temp =  FlexSliderModel::findOrFail($id);
    $group_temp = GroupFlexSliderModel::select('id','name')->where('published','yes')->get();
    return view('admin.slider.slider_edit',compact('slider_temp','group_temp'));
    }
    public function update($id,Request $request)
    {
        $slider =   FlexSliderModel::findOrFail($id);
        $slider->title= $request->txttitle;
        $slider->alias = changeTitle($request->txttitle);
        $slider->order = 0;
        $slider->published = $request->txtpublished;
        $slider->group_id = $request->txtgroup_id;
        if(!empty($request->file('txtimage'))){
        $file_name = $request->file('txtimage')->getClientOriginalName();
        $request->file('txtimage')->move('public/image_upload/slider/', $file_name);
        $slider->image =  $file_name;
        File::delete(public_path().'/image_upload/slider/'.$request->txtimage1);
        }

        if(!empty($request->file('txtimage_box1'))){
        $file_name1 = $request->file('txtimage_box1')->getClientOriginalName();
        $request->file('txtimage_box1')->move('public/image_upload/slider/slider_box/', $file_name1);
        $slider->img_box1 = $file_name1;
        $slider->box1 = $request->txtbox1;
        File::delete(public_path().'/image_upload/slider/slider_box/'.$request->txtimage_box1_old);
        } 

        $slider->save();

        return redirect()->route('admin.slider.index')->with(['flash_message'=>'Sửa Thành Công']);
    }
    public function destroy($id)
    {   
    $slider =  FlexSliderModel::findOrFail($id);
    File::delete(public_path().'/image_upload/slider/'.$slider->image);
    File::delete(public_path().'/image_upload/slider/slider_box/'.$slider->img_box1);
    $slider->delete();
    return redirect()->route('admin.slider.index')->with(['flash_message'=>'Xóa Thành Công']);
	}
}
