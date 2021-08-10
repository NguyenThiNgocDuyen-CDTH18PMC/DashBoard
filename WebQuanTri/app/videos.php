<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    protected $table='videos';
    protected $primaryKey='id';
    protected $fillable=[
        'img',
        'title',
        'category',
        'content',
        'createdDay',
        'createdBy',
        'view',
        'video',
        'trangthai',
    ];
    
    public $timestamps =false;
}
