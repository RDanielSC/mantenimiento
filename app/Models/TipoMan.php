<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoMan extends Model
{
    protected $table = 'tipoman';
    public $timestamps =false;
    protected $primaryKey = 'TipoMan_ID';
    protected $fillable=[
        'TipoMan_ID','Descripcion'];
}
