<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Albums;

class AlbumsController extends Controller
{

		public function index(){
			return Albums::with('photos')->find(1);
		}

		public function update(Request $request)
    {

    }
}