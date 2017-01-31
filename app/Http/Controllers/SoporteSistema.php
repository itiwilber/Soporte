<?php

namespace activalab\Http\Controllers;

use Illuminate\Http\Request;

use activalab\Http\Requests;

class SoporteSistema extends Controller
{
    public function index(){
    	return view('admin.index');
    }
}
