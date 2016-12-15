<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area';
    public $timestamps =false;
    protected $primaryKey = 'Area_ID';
    protected $fillable=[
        'Area_ID','Descripcion'
    ];

}