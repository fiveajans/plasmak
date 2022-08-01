<?php

namespace App\Controllers\Connect;

use Core\Controller;

class Login extends Controller
{
	public function index()
	{
		return $this->view('connect.pages.login');
	}
}
