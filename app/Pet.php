<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use SoftDeletes;
}
