<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    protected $primaryKey ="USERNAME";
      // public $timestamps =false;
      public $incrementing = false;
}
