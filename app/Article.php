<?php

namespace App;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Taggable;

    protected $fillable = ['title', 'body'];
}
