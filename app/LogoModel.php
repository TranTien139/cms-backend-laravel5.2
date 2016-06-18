<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class LogoModel extends Model
{
    protected $table='logo';
    protected $fillable = ['image'];
    public $timestamps = true;
}
