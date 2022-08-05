<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Competencies extends Client
{
	public function production()
	{
		return $this->view('client.pages.compotencies.production', $this->data);
	}

	public function arge()
	{
		return $this->view('client.pages.compotencies.arge', $this->data);
	}

	public function technology()
	{
		return $this->view('client.pages.compotencies.technology', $this->data);
	}

	public function distribution()
	{
		return $this->view('client.pages.compotencies.distribution', $this->data);
	}
}
