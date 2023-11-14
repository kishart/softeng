<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function post_photo(){
        return view('admin.post_photo');
    }
}
