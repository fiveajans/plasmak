<?php

namespace App\Controllers\Client;

use App\Controllers\Client;
use PDO;

class Products extends Client
{
	public function list()
	{
		// Categories
		$sql = "SELECT name, slug
		FROM product_categories
		WHERE deleted_at IS NULL";

        $categories = $this->db->query($sql, PDO::FETCH_OBJ);

		// Products
		$sql = "SELECT p.name AS name, p.slug AS slug,
		pimg.url AS image_url,
		pc.name AS category_name, pc.slug AS category_slug
		FROM products p
		INNER JOIN product_images pimg ON pimg.product_id = p.id
		INNER JOIN product_categories pc ON pc.id = p.category_id
		WHERE (p.deleted_at IS NULL && pimg.deleted_at IS NULL && pc.deleted_at IS NULL)
		&& p.default_image = pimg.id";

        $products = $this->db->query($sql, PDO::FETCH_OBJ);

		$this->data['categories'] = $categories;
		$this->data['products'] = $products;

		return $this->view('client.pages.products.list', $this->data);
	}

	public function detail($slug)
	{
		// Products
		$sql = "SELECT p.id AS id, p.name AS name, p.description AS description, p.content AS content, p.video AS video,
		pc.name AS category_name
		FROM products p
		INNER JOIN product_categories pc ON pc.id = p.category_id
		WHERE p.deleted_at IS NULL AND pc.deleted_at IS NULL
		AND p.slug = '{$slug}'";

		$product = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

		if (!$product)
		{
			header('Location: ' . site_url('urunlerimiz'));
			exit;
		}

		$id = $product->id;

		// Images
		$sql = "SELECT url
		FROM product_images
		WHERE deleted_at IS NULL
		AND product_id = '{$id}'";

		$images = $this->db->query($sql, PDO::FETCH_OBJ);

		// Prev Product
		$sql = "SELECT name, slug
		FROM products
		WHERE deleted_at IS NULL
		AND id < '{$id}'";

		$prevProduct = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

		// Next Product
		$sql = "SELECT name, slug
		FROM products
		WHERE deleted_at IS NULL
		AND id > '{$id}'";

		$nextProduct = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

		$this->data['product'] = $product;
		$this->data['images'] = $images;
		$this->data['prevProduct'] = $prevProduct;
		$this->data['nextProduct'] = $nextProduct;

		return $this->view('client.pages.products.detail', $this->data);
	}
}
