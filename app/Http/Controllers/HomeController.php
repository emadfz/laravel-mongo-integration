<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //

    public function mongo()
    {
    	$users = DB::collection('users')->first();
    	return $users['name'];
    }
}
