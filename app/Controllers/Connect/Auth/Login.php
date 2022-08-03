<?php

namespace App\Controllers\Connect\Auth;

use Core\Controller;

class Login extends Controller
{
	public function index()
	{
		return $this->view('connect.pages.auth.login');
	}
}
