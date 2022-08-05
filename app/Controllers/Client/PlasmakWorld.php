<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class PlasmakWorld extends Client
{
	public function plasmakInShort()
	{
		return $this->view('client.pages.plasmakworld.plasmak-in-short', $this->data);
	}

	public function boardOfDirectors()
	{
		return $this->view('client.pages.plasmakworld.board-of-directors', $this->data);
	}

	public function director()
	{
		return $this->view('client.pages.plasmakworld.director', $this->data);
	}

	public function plasmakPerfect()
	{
		return $this->view('client.pages.plasmakworld.plasmak-perfect', $this->data);
	}
}
