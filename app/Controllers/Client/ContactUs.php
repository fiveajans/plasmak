<?php

namespace App\Controllers\Client;

use App\Controllers\Client;
//use PDO;

class ContactUs extends Client
{
	public function index()
	{
		return $this->view('client.pages.contact-us', $this->data);
	}
}
