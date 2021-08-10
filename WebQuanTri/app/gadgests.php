<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gadgests extends Model
{
    protected $table='gadgests';
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
    ];
    
    public $timestamps =false;
}
