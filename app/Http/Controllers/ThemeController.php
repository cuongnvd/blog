<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\Theme;

class ThemeController extends Controller
{
	 	public function getthemeadd(){
    	return view('admin1/themeadd');
    	}


      public function save_theme(Request $request){
    	$theme = new Theme();
    	$theme->fill($request->all());
    	$theme->save();
    	Session::put('message','Thêm chủ đề thành công');
    	return Redirect::to('themeadd');
    	}

      public function getthemelist(){

        $theme = Theme::select('id','name')->orderBy('id','DESC')->get();
        // print_r($theme);
        return view('admin1/themelist',compact('theme'));
    }

    public function destroy($id)
    {
        $id = request()->id;
  
        Theme::find($id)->delete();
        return redirect()->Route('themelist')->with('message',' xóa chủ đề thành công.');
    }
}
