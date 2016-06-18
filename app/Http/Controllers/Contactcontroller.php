<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ContactModel;

class Contactcontroller extends Controller
{
     public function index(){
    $contact_temp =  ContactModel::findOrFail('1');
    return view('admin.contact.contact_list',compact('contact_temp')); }
    public function show($id)
    {
      echo "404";
    }
    public function edit()
    {
    $contact_temp =  ContactModel::findOrFail('1');
    return view('admin.contact.contact_edit',compact('contact_temp'));
    }
    public function update(Request $request)
    {
        $contact_temp =  ContactModel::findOrFail('1');
        $contact_temp->linkfacebook= $request->txtfacebook;
        $contact_temp->linktwitter= $request->txttwitter;
        $contact_temp->linkgoogleplus= $request->txtgoogleplus;
        $contact_temp->phone1= $request->txtphone1;
        $contact_temp->phone2= $request->txtphone2;
        $contact_temp->email= $request->txtemail;
        $contact_temp->adress= $request->txtadress;
        $contact_temp->linkgooglemap= $request->txtgooglemap;
       	$contact_temp->save();
       	return redirect()->route('admin.contact.index')->with(['flash_message'=>'Sửa thành công']);
    }
}
