<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forgotPass extends Model
{
    protected $table='forgot_passes';
    protected $primaryKey='id';
    protected $fillable=[
        'email',
        'token',
        'trangthai'
    ];
    
    public $timestamps =false;
}
