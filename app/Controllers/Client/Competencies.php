<?php

namespace App\Controllers\Client;

use Core\Controller;

class Competencies extends Controller
{
	public function production()
	{
		return $this->view('client.pages.compotencies.production');
	}

	public function arge()
	{
		return $this->view('client.pages.compotencies.arge');
	}

	public function technology()
	{
		return $this->view('client.pages.compotencies.technology');
	}

	public function distribution()
	{
		return $this->view('client.pages.compotencies.distribution');
	}
}
