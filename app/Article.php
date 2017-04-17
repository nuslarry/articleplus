<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=['imagePath','description','write_language','correct_language'];
}
