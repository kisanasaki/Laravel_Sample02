<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class test extends Model
{
    //
    public static function index(){
      $id = Auth::id();
      return $id;
    }
    

}
