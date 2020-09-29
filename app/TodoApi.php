<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoApi extends Model
{
    protected $fillable=['title', 'completed'];
}
