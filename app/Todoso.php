<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todoso extends Model
{
    protected $table = 'todosos';
    protected $fillable = ['name_TODO'];
}
