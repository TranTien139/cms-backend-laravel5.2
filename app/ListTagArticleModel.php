<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTagArticleModel extends Model
{
    protected $table='list_tags_articles';
    protected $fillable = ['name','alias'];
    public $timestamps = true;
}
