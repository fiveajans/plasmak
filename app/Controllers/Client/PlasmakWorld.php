<?php

namespace App\Controllers\Client;

use Core\Controller;

class PlasmakWorld extends Controller
{
	public function plasmakInShort()
	{
		return $this->view('client.pages.plasmakworld.plasmak-in-short');
	}

	public function boardOfDirectors()
	{
		return $this->view('client.pages.plasmakworld.board-of-directors');
	}

	public function director()
	{
		return $this->view('client.pages.plasmakworld.director');
	}

	public function plasmakPerfect()
	{
		return $this->view('client.pages.plasmakworld.plasmak-perfect');
	}
}
