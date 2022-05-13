<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}	
      public function dashboard()
	{
		return view('auth.dashboard');
	}
}
