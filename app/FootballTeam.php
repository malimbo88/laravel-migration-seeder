<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FootballTeam extends Model
{
    protected $fillable = [
      "name",
      "nationality",
      "colors",
      "foundation",
      "trophies"
    ];
}
