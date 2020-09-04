<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Models\Theme;
use App\Models\News;
use Illuminate\Support\Facades\Redirect;session_start();

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getindex(){
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get(); 
        $newdata1 = News::orderBy('id', 'DESC')->paginate(7);

        return view('trangchu',compact(['newdata','newdata1']));
    }
    public function getinsideaman(){
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get();
        $data = Theme::find(4)->post;

        return view('insideaman',compact(['data','newdata']));
      
    }
    public function getmoneymanagement(){
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get();
        $data = Theme::find(8)->post;
        
        return view('moneymanagement',compact(['data', 'newdata']));

    }
    public function getrefineyourstyle(){
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get();
        $data = Theme::find(3)->post;
        // dd($data);

        return view('refineyourstyle',compact(['data','newdata']));
    }
    
    public function getrelationship(){
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get();
        $data = Theme::find(5)->post;
        // dd($data);

        return view('relationship',compact(['data','newdata']));

    }
      public function getselfimprovement(){
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get();
        $data = Theme::find(6)->post;
        // dd($data);

        return view('selfimprovement',compact(['data','newdata']));
    }

    public function getworkcareer(){
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get();
         $data = Theme::find(9)->post;
        // dd($data);

        return view('workcareer',compact(['data','newdata']));
    }

    public function getresetpassword(){
         return view('resetpassword');
    }


      
     //hienthi chi tiet news
    public function chitietnews($id)
    {
        $chitietnews = News::find($id);
        $newdata = News::orderBy('id', 'DESC')->limit(4)->get(); 
        
        return view('chitiet',compact('chitietnews','newdata'));
    }

    // public function getTutter()
    //  {
    //     $data_rss  = $this->getRssSSS();
    //     $message   = 'No data to retrieve!';
    //     $dir_image = 'tuoi-tre/';
    //     foreach ($data_rss as $key => $news_item) {
    //         $html = file_get_html($news_item['link']);
    //         $this->replaceAttr($html);
    //         $parse_domain     = parse_url($news_item['link']);
    //         $domain_name      = $parse_domain['host'];
    //         $news_title       = $this->removeWhiteSpace($html->find('h1.article-title', 0)->plaintext);
    //         $news_description = $this->removeWhiteSpace(substr($html->find('h2.sapo', 0)->plaintext, 0, 250));
    //         $content          = $this->removeWhiteSpace($html->find('.main-content-body', 0)->innertext);
    //         $news_content     = $this->removeTagScript($content);
    //         $image_url        = $html->find('meta[property=og:image]')[0]->content;
    //         $parse_image_url  = parse_url($image_url);
    //         $link_img_explode = explode('/', $parse_image_url['path']);
    //         $image_name       = end($link_img_explode);
    //         $cat_slug         = $news_item['cat_slug'];
    //         $category_exist   = Category::where('slug', $cat_slug)->first();
    //         $news             = $this->saveNews($image_url, $news_title, $news_description, $news_content,
    //             $dir_image, $image_name, $domain_name, $category_exist);
    //         if (filled($news)) {
    //             $message = 'Data retrieve success!';
    //         }
    //     }
    //     return $message;
    // }

    // public function getRssTutter()
    // {
    //     $categories = ['refine-your-style', 'relationships', 'self-improvement', 'money-management', 'works-career', 'inside-a-man'];
    //     $xml_url    = "";
    //     $data_rss   = [];
    //     foreach ($categories as $rss) {
    //         switch ($rss) {
    //             case 'refine-your-style':
    //                 $xml_url = 'https://tuoitre.vn/rss/khoa-hoc.rss';
    //                 break;
    //             case 'relationships':
    //                 $xml_url = 'https://tuoitre.vn/rss/the-gioi.rss';
    //                 break;
    //             case 'self-improvement':
    //                 $xml_url = 'https://tuoitre.vn/rss/the-thao.rss';
    //                 break;
    //             case 'money-management':
    //                 $xml_url = 'https://tuoitre.vn/rss/suc-khoe.rss';
    //                 break;
    //             case 'works-career':
    //                 $xml_url = 'https://tuoitre.vn/rss/du-lich.rss';
    //                 break;
    //             case 'inside-a-man':
    //                 $xml_url = 'https://tuoitre.vn/rss/nhip-song-so.rss';
    //                 break;
               
    //         }
    //         $html               = file_get_contents($xml_url);
    //         $invalid_characters = '/[^\x9\xa\x20-\xD7FF\xE000-\xFFFD]/';
    //         $html               = preg_replace($invalid_characters, '', $html);
    //         $xmlDoc             = simplexml_load_string($html, "SimpleXMLElement", LIBXML_NOCDATA);
    //         foreach ($xmlDoc->channel->item as $value) {
    //             if ($value->title != '') {
    //                 $itemTitle  = ((array)$value->title)[0];
    //                 $itemLink   = ((array)$value->link)[0];
    //                 $item       = [
    //                     'title'    => $itemTitle,
    //                     'link'     => $itemLink,
    //                     'cat_slug' => $rss,
    //                 ];
    //                 $data_rss[] = $item;
    //             }
    //         }
    //     }
    //     shuffle($data_rss);
    //     return array_slice($data_rss, 0, 5);
    // }



}
