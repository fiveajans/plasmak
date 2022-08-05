<?php

namespace App\Controllers\Client;

use Core\Controller;
use PDO;

class Home extends Controller
{
	public function index()
	{
		// Products
		$sql = "SELECT p.name AS name, p.slug AS slug,
		pimg.url AS image_url,
		pc.name AS category_name
		FROM products p
		INNER JOIN product_images pimg ON pimg.product_id = p.id
		INNER JOIN product_categories pc ON pc.id = p.category_id
		WHERE (p.deleted_at IS NULL && pimg.deleted_at IS NULL && pc.deleted_at IS NULL)
		&& p.default_image = pimg.id";

        $products = $this->db->query($sql, PDO::FETCH_OBJ);

        $data = [
            'products' => $products
        ];

		return $this->view('client.pages.home', $data);
	}
}
