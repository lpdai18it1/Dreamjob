<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function getAdmin()
    {
    	return view('page.trangchuAdmin');
    }
}
