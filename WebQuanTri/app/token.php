<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table='token';
    protected $primaryKey='id';
    protected $fillable=[
        'trangthai'
    ];
    public $timestamps =false;
}
