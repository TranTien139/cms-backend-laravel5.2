<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix'=>'admin'],function(){
		Route::get('/',['as'=>'getlogin','uses'=>'UserController@getlogin']);
		Route::get('/logout',['as'=>'getlogout','uses'=>'UserController@getlogout']);
		Route::post('/',['as'=>'postlogin','uses'=>'UserController@postlogin']);
		Route::resource('user','UserController');
		Route::get('profile',['as'=>'getprofile','uses'=>'UserController@getprofile']);
		Route::post('getchangepassword',['as'=>'changepassword','uses'=>'UserController@changepassword']);
    	Route::get('plugin',function(){return view('admin.general.plugin'); });
    	Route::resource('groupslider','GroupFlexSliderController');
    	Route::resource('slider','FlexSliderController');
    	Route::resource('article','ArticleController');
        Route::resource('htmlblock','HtmlBlockController');
        Route::resource('contact','ContactController');
        Route::resource('changelogo','LogoController');
        Route::resource('menu','MenuController');
        Route::resource('category_article','CategoriesArticleController');
        Route::resource('tag_article','ListTagArticleControler');
        Route::get('countvisit',function(){return view('admin.countvisit.countvisit'); });
        Route::get('deletesliderbox/{id}',function(){
        $id = Request::segment(3);
        $value = DB::table('flexsliders')->where("id",$id);
        $value1 = $value->first();
        File::delete(public_path().'/image_upload/slider/slider_box/'.$value1->img_box1);
        $value->img_box1="";
        $value->box1="";
        $value->save();
        return redirect()->back();
        });
        
        Route::get('password/reset/{token}',['as'=>'getReset','uses'=>'Auth\PasswordController@getReset']);
        Route::post('password/reset',['as'=>'postReset','uses'=>'Auth\PasswordController@postReset']);
        Route::get('password/email',['as'=>'getEmail','uses'=>'Auth\PasswordController@getEmail']);
        Route::post('password/email',['as'=>'postEmail','uses'=>'Auth\PasswordController@postEmail']);
    });
});

Route::group(['middleware' => ['web']], function () {
Route::get('/', function () {
    return view('themes.index');
});
});
