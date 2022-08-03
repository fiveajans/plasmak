<?php

namespace App\Controllers\Connect\Auth;

use Core\Controller;

class Register extends Controller
{
	public function index()
	{
		return $this->view('connect.pages.auth.register');
	}
}
