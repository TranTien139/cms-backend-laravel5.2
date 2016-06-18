<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HtmlBlockModel extends Model
{
    protected $table='htmlblock';
    protected $fillable = ['title','alias','content','published'];
    public $timestamps = true;
}
