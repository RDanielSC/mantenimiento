<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSistema extends Model
{
    protected $table = 'subsistema';
    public $timestamps =false;
    protected $primaryKey = 'SubSistema_ID';
protected $fillable=[
    'SubSistema_ID','Descripcion'
];
}
