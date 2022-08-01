<?php

namespace App\Controllers\Client;

use Core\Controller;

class PlasmakWorld extends Controller
{
	public function plasmakInShort()
	{
		return $this->view('client.pages.plasmakworld.plasmak-in-short');
	}
}
