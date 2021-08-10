<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contacts';
    protected $primaryKey='id';
    protected $fillable=[
        'username',
        'email',
        'phone',
        'subject',
        'message',
        'trangthai'
    ];
    public $timestamps =false;
}
