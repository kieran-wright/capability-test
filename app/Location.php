<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    public function __construct(array $attributes = array()){
      $junk = $invalid ?? "default";
      return parent::__construct($attributes);
    }
}
