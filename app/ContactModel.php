<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table='contact';
    protected $fillable = ['linkfacebook','linkgoogleplus','linktwitter','phone1','phone2','adress','linkgooglemap'];
    public $timestamps = true;
}
