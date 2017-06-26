<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = array('id', 'name', 'score', 'time', 'created_at', 'updated_at');
}
