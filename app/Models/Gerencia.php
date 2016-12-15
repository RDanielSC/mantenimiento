<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerencia extends Model
{
    //
    protected $table = 'gerencia';
    public $timestamps =false;
    protected $primaryKey = 'Gerencia_ID';
    protected $fillable=[
        'Gerencia_ID','Descripcion'
    ];
}
