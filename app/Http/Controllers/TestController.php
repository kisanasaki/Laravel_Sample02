<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
      $id = \App\Models\test::index();
      //dd($id);
      return view('test',compact('id'));
    }

}
