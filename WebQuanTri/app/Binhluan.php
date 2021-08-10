<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    protected $table='binhluans';
    protected $primaryKey='id';
    protected $fillable=[
        'img',
        'use_id',
        'post_id',
        'noidung',
        'trangthai',
    ];
    
    public $timestamps =true;
}
