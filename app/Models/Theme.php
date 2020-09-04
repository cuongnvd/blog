<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
     protected $table = 'theme';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         
    ];

    public $timestamps = false;


     public function post(){
        return $this->hasmany('App\Models\News','theme_id');
    }

}
