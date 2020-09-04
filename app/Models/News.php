<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'summary',
         'images',
         'content',
         'sent_date',
         'theme_id',
         
    ];

    public $timestamps = false;



   
}
