<?php

namespace App\Controllers\Client;

use Core\Controller;
use PDO;

class Corporate extends Controller
{
	public function recentNews()
	{
		// Articles
		$sql = "SELECT a.name AS name, a.slug AS slug, a.description AS description, a.image_url AS image_url, a.tags AS tags, a.created_at AS created_at,
		ac.name AS category_name, ac.slug AS category_slug
		FROM articles a
		INNER JOIN article_categories ac ON ac.id = a.category_id
		WHERE (a.deleted_at IS NULL && ac.deleted_at IS NULL)
		ORDER BY a.id DESC";

        $articles = $this->db->query($sql, PDO::FETCH_OBJ);

		// Tags
		$sql = "SELECT tags
		FROM articles
		WHERE deleted_at IS NULL
		ORDER BY id DESC";

        $tags = $this->db->query($sql, PDO::FETCH_OBJ);

		// Categories
		$sql = "SELECT name, slug
		FROM article_categories
		WHERE deleted_at IS NULL
		ORDER BY id DESC";

        $categories = $this->db->query($sql, PDO::FETCH_OBJ);

		$data = [
			'articles' => $articles,
			'tags' => $tags,
			'categories' => $categories
		];

		return $this->view('client.pages.corporate.recent-news.list', $data);
	}

	public function recentNewsDetail()
	{
		return $this->view('client.pages.corporate.recent-news.detail');
	}
}
