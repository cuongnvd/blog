<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\User;
use App\Models\Theme;
class AdminController extends Controller
{
     public function getindex(){
     	$news = News::all()->count(); 
     	$users = User::all()->count(); 
        $themes = Theme::all()->count();
    	return view('admin1.index',compact(['news','users','themes']));

    	}

     public function getdashboard(){
       
        return view('admin1.dashboard',compact(['dashboard']));

        }


       public function getlogin(){

         return view('login');
    }

     //dang nhap
    public function postlogin(Request $request){

    	$arr = [
    			'email' => $request->email,
    			'password' => $request->password
    	];
    	if(Auth::attempt($arr)){
    		return redirect()->route('index');
    	}else{
    		return redirect()->back()->with('message', 'Đăng nhập không thành công');
    	}
    }

    //out tai khoan
      public function logout(){
    	Auth::logout();
    	return view('login');
    }
    	
   
}


 