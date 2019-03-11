<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImAModel extends Model
{
    public static function GetEverything() {

      $exe = exec("/home/robert/go/src/db_get/db_get");

      return json_decode($exe, true);
    }
}
