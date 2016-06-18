<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    protected $table='articles';
    protected $fillable = ['title','alias','desription','content','image','category_id','tag_id','auth','ishot','published'];
    public $timestamps = false;
}
