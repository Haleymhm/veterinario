<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    protected $table = 'veterinaries';
    protected $fillable = [
        'id',
        'uid',
        'name',
        'address',
        'telephone',
        'movil',
        'logo',
        'email',
        'created_at',
        'updated_at'
    ];
}
