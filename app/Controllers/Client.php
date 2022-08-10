<?php

namespace App\Controllers;

use Core\Controller;
use PDO;

class Client extends Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();

		$sql = "SELECT slug, description, created_at
		FROM articles
		WHERE deleted_at IS NULL
		ORDER BY id DESC
		LIMIT 2";

        $this->data['recentNews'] = $this->db->query($sql, PDO::FETCH_OBJ);
	}
}
