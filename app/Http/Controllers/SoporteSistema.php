<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class SoporteSistema extends Controller
{
    public function index(){
    	return view('admin.index');
    }
}
