<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    protected $table = 'sistema';
    public $timestamps =false;
    protected $primaryKey = 'Sistema_ID';
    protected $fillable=[
        'Sistema_ID','Descripcion'
    ];
}
