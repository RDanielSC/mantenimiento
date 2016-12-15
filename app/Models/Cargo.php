<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    public $timestamps =false;
    protected $primaryKey = 'Cargo_ID';
    protected $fillable=[
        'Cargo_ID','Descripcion'
    ];
}
