<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTagModel extends Model
{
    protected $table='articles_tags';
    protected $fillable = ['articles_id','tag_id','text_tag'];
    public $timestamps = true;
}
