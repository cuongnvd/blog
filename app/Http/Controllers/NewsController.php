<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\News;
use Illuminate\Support\Str;


class NewsController extends Controller
{
		 public function getnewsadd(){
    	return view('admin1.newsadd');
    	}


    public function postAddnews(Request $request){
    	$news = new News();
        $news->fill($request->all()); 
        if($request->hasFile('images')){
            $file = $request->file('images');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jepg'){
                Session::put('message','Bạn chỉ được chọn file css đuôi jpg,png,jepg');
                return Redirect::to('newsadd');
            }
                $filename = $file->getClientOriginalName();
                $images = Str::random(4)."_".$filename;
            
                while(file_exists("upload".$images))
                {
                    $images = Str::random(4)."_".$filename;
                }

                $file->move('upload',$images);
                $news->images = $images;
            }
            else{
                $news->images = "";
            }


    	$news->save();
    	Session::put('message','Thêm tin tức thành công');
    	return Redirect::to('newsadd');
    	}

    public function getnewslist(){
    	$news = News::select('id','title','summary','images','sent_date','theme_id')->orderBy('id','DESC')->paginate(5);
        // print_r($theme);
        return view('admin1/newslist',compact('news'));
    	}

     public function destroy($id)
        {
             News::find($id)->delete();
            return redirect()->Route('newslist')->with('message',' xóa tin tức thành công.');
        }

    //sua tin tuc
    public function edit($id)
        {
        $news = News::findOrFail($id);
        $pageName = 'News - Update';
        return view('/admin/newsupdate', compact('news', 'pageName'));

        
        }

     public function update(Request $request, $id)
        {
        $news = News::find($id);
        $news->title = $request->title;
        $news->images = $request->images;
        $news->content = $request->content;
        $news->summary = $request->summary;
        $news->sent_date = $request->sent_date;
        $news->theme_id = $request->theme_id;

        $news->save();
        return redirect()->Route('newslist')->with('message','Cập nhật thành công.');
        }
}






