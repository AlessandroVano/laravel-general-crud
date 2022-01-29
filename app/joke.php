<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class joke extends Model
{
   protected $fillable = [
       'author',
       'title',
       'body'

   ];
}
