<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\News;

class NewsCrawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //đặt tên là gì cũng được => dùng để gọi lệnh
    protected $signature = 'crawelr:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $dom = file_get_html('https://ssstutter.com/news');
       $a = $dom->find('.content-cat .list .row .col-xs-12', 0);

       $news = array();
       foreach ($a as $key => $value){
         dd($value);
            $new['created_at'] = 0;
            $new['updated_at'] = 0;
            $new['title'] = $value->innertext;
            $new['summary'] = $value->innertext;;
            $new['images'] = 0;
            $new['content'] = 0;
            $new['sent_date'] = 0;
            $new['theme_id'] = 0;
            $new['slug'] = $value->href;
             

            $news[] = $new;


       }
       foreach ($news as $key => $value) {
           News::create('$value');

       }

       // echo "<pre>";
       // print_r($theme);
       // echo "</pre>";
       // dd();
    }
}
