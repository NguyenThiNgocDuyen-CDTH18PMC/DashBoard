<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dulieu extends Model
{
    protected $table='dulieus';
    protected $primaryKey='id';
    protected $fillable=[
        'img',
        'title',
        'category',
        'by',
        'createdDay',
        'createdBy',
        'view',
        'trangthai',
        'user_id',
    ];
    
    public $timestamps =false;
}
