<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footballer extends Model
{
    protected $fillable = [
      "name",
      "lastname",
      "nationality",
      "position",
      "age",
      "description"
    ];
}
