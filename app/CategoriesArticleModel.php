<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesArticleModel extends Model
{
    protected $table='categories_articles';
    protected $fillable = ['name','alias'];
    public $timestamps = true;
}
