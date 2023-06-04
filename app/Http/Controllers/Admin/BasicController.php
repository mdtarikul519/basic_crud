<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
   public function create(){
    return view('admin.basic.create');
   }
}
