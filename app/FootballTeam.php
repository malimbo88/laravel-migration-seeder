<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footballteam extends Model
{
    protected $fillable = [
      "name",
      "nationality",
      "colors",
      "foundation",
      "trophies"
    ];
}
