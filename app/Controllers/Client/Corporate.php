<?php

namespace App\Controllers\Client;

use Core\Controller;

class Corporate extends Controller
{
	public function recentNews()
	{
		return $this->view('client.pages.corporate.recent-news.list');
	}
}
