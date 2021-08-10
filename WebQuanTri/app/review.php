<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table='reviews';
    protected $primaryKey='id';
    protected $fillable=[
        'img',
        'title',
        'category',
        'content',
        'createdDay',
        'createdBy',
        'view',
        'trangthai',
    ];
    
    public $timestamps =false;
}
