<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Requests;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/trangchu', function () {
    return view('trangchu');
});



// Auth::routes();



Route::get('/trangchu', 'HomeController@getindex')->name('trangchu');

Route::get('/insideaman', 'HomeController@getinsideaman')->name('insideaman');

Route::get('/moneymanagement', 'HomeController@getmoneymanagement')->name('moneymanagement');

Route::get('/relationship', 'HomeController@getrelationship')->name('relationship');

Route::get('/selfimprovement', 'HomeController@getselfimprovement')->name('selfimprovement');

Route::get('/workcareer', 'HomeController@getworkcareer')->name('workcareer');

Route::get('/resetpassword', 'HomeController@getresetpassword')->name('resetpassword');

Route::get('/chitiet', 'HomeController@getchitiet')->name('chitiet');

Route::get('/refineyourstyle', 'HomeController@getrefineyourstyle')->name('refineyourstyle');


Route::group(['prefix' => 'admin','middleware' => 'adminlogin'], function () {
	Route::group(['prefix' => 'News'], function () {
		// ------tin tuc------
		Route::get('newsadd', 'NewsController@getnewsadd')->name('newsadd');
		// ----hien thi danh sach tin tuc----
		Route::get('newslist', 'NewsController@getnewslist')->name('newslist');
		// --------them tin tuc-------
		Route::post('/addnews','NewsController@postAddnews');
		//xoa tin tức
		 Route::DELETE('news/delete/{id}', 'NewsController@destroy')->name('news.delete');
		 //sua tin tuc
        Route::get('/edit/{id}', 'NewsController@edit')->name('news.edit');
        //update tin tuc
        Route::PATCH('newsupdate/{id}', 'NewsController@update')
            ->name('news_update');
	

		//up file
		Route::post('postFile',['as'=>'postFile','news'=>'NewsController@save_news']);
	});
	Route::group(['prefix' => 'Theme'], function () {
		// ----chu de----
		Route::get('themeadd', 'ThemeController@getthemeadd')->name('themeadd');
		// ----hien thi danh sach chu de----
		Route::get('themelist', 'ThemeController@getthemelist')->name('themelist');
		// --------them chu de-------
		Route::post('/save-theme','ThemeController@save_theme');
		//xoa chude
		Route::DELETE('/delete/{id}', 'ThemeController@destroy')->name('theme.delete');
	});
	Route::group(['prefix' => 'User'], function () {
		// ------nguoi dung------
		Route::get('useradd', 'UserController@getuseradd')->name('useradd');
		// --------them nguoi dung-------
		Route::post('/adduser','UserController@postAdduser');
		// ----hien thi danh sach nguoi dung----
		Route::get('userlist', 'UserController@getuserlist')->name('userlist');
		//xoa nguoi dung
		Route::DELETE('user/delete/{id}', 'UserController@destroy')->name('users.delete');
		// hien thi sua nguoi dung
        Route::get('/passwordedit/{id}', 'UserController@passwordedit')->name('password.edit');
        //cap nhat nguoi dung
        Route::PATCH('/userupdate/{id}', 'UserController@updatepassword')->name('password_update');
	});
	//hien thi trang dashboard
		Route::get('/index', 'AdminController@getindex')->name('index');
		Route::get('/dashboard', 'AdminController@getdashboard')->name('dashboard');
});




// ----hien thi trang login----
Route::get('/login', 'AdminController@getlogin')->name('login');
// dang nhap
Route::post('/post-login','AdminController@postlogin')->name('login.post');
//dang xuat
Route::get('/logout','AdminController@logout');

//hien thi chi tiet news
Route::get('/chitiet/{id}', 'HomeController@chitietnews')->name('chitiet');









// Route::get('/trangchu', 'HomeController@getTutter')->name('trangchu');












