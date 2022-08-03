<?php

namespace App\Controllers\Admin;

use Core\Controller;
use PDO;
use Symfony\Component\HttpFoundation\Request;
use Verot\Upload\Upload;
use Ausi\SlugGenerator\SlugGenerator;

class Products extends Controller
{
	public function approved()
	{
        $sql = "SELECT p.id AS id, p.name AS name, p.description AS description, p.updated_at AS updated_at,
        pimg.url AS image_url
        FROM products p
        LEFT JOIN product_images pimg ON pimg.product_id = p.id
		WHERE p.deleted_at IS NULL AND
		CASE
			WHEN p.default_image IS NOT NULL THEN p.default_image = pimg.id
			ELSE pimg.id
		END
        ORDER BY p.id DESC";

        $query = $this->db->query($sql, PDO::FETCH_OBJ);

        $data = [
            'products' => $query
        ];

		return $this->view('admin.pages.products.approved', $data);
	}

	public function unapproved()
	{
		$sql = "SELECT p.id AS id, p.name AS name, p.description AS description, p.deleted_at AS deleted_at, p.updated_at AS updated_at,
        pimg.url AS image_url
        FROM products p
        LEFT JOIN product_images pimg ON pimg.product_id = p.id
		WHERE p.deleted_at IS NOT NULL AND
		CASE
			WHEN p.default_image IS NOT NULL THEN p.default_image = pimg.id
			ELSE pimg.id
		END
        ORDER BY p.id DESC";

        $query = $this->db->query($sql, PDO::FETCH_OBJ);

        $data = [
            'products' => $query
        ];

		return $this->view('admin.pages.products.trash', $data);
	}

	public function create(Request $request)
    {
		$generator = new SlugGenerator;

		$data = [];
		$message = [];

		if ($request->getMethod() == 'POST')
		{
			$this->validator->rule('required', [
				'name',
				'description',
				'content'
			]);

			$data = $this->validator->data();

			if ($this->validator->validate())
			{
				$files = [];

				foreach ($_FILES['images'] as $k => $l)
				{
					foreach ($l as $i => $v)
					{
						if (!array_key_exists($i, $files))
						{
							$files[$i] = array();
						}

						$files[$i][$k] = $v;
					}
				}

				$uploadError = false;
				$images = [];

				foreach ($files as $file)
				{
					$handle = new Upload($file);

					if ($handle->uploaded)
					{
						$name = $generator->generate($data['name']) . '_' . hashid();
						$images[] = $name . '.jpg';

						$handle->allowed = ['image/*'];
						$handle->file_new_name_body = $name;
						$handle->image_convert = 'jpg';
						$handle->process('./uploads/images/original/products');

						$handle->allowed = ['image/*'];
						$handle->file_new_name_body = $name;
						$handle->image_convert = 'jpg';
						$handle->image_resize = true;
						$handle->image_x = 400;
						$handle->image_y = 400;
						$handle->image_ratio_crop = true;
						$handle->process('./uploads/images/cache/products/800x530');

						$handle->allowed = ['image/*'];
						$handle->file_new_name_body = $name;
						$handle->image_convert = 'jpg';
						$handle->image_resize = true;
						$handle->image_x = 40;
						$handle->image_y = 40;
						$handle->image_ratio_crop = true;
						$handle->process('./uploads/images/cache/products/40x40');

						if (!$handle->processed)
						{
							$uploadError = true;
						}
					}
					else
					{
						$uploadError = true;
					}

					$handle->clean();
				}

				if ($uploadError)
				{
					$message = [
						'class' => 'danger',
						'text' => 'Bir hata oluştu ve resim(ler) yüklenemedi.'
					];
				}
				else
				{
					$name = $data['name'];
					$slug = $generator->generate($name);
					$description = $data['description'];
					$content = $data['content'];
					$video = $data['video'];
					$category_id = $data['category_id'];

					$sql = "INSERT INTO products SET
					name = ?,
					slug = ?,
					description = ?,
					content = ?,
					video = ?,
					category_id = ?";

					$query = $this->db->prepare($sql);

					$insert = $query->execute([
						$name,
						$slug,
						$description,
						$content,
						$video,
						$category_id
					]);

					if ($insert)
					{
						$insertError  = false;
						$id = $this->db->lastInsertId();

						$i = 0;

						foreach ($images as $image)
						{
							$i++;

							$sql = "INSERT INTO product_images SET
							image = ?,
							product_id = ?";

							$query = $this->db->prepare($sql);

							$insert = $query->execute([
								$image,
								$id
							]);

							if (!$insert)
							{
								$insertError = true;
							}

							$imageId = $this->db->lastInsertId();

							if ($i == 1)
							{
								$sql = "UPDATE products SET
								default_image = :default_image
								WHERE id = :id";

								$query = $this->db->prepare($sql);

								$update = $query->execute([
									'default_image' => $imageId,
									'id' => $id
								]);

								if (!$update)
								{
									$insertError = true;
								}
							}
						}

						if ($insertError)
						{
							$message = [
								'class' => 'warning',
								'text' => 'Ürün resimleri eklenirken bir hata oluştu.'
							];
						}
						else
						{
							$message = [
								'class' => 'success',
								'text' => 'Ürün başarılı bir şekilde eklendi.'
							];
						}
					}
					else
					{
						$message = [
							'class' => 'danger',
							'text' => 'Bir hata oluştu ve ürün eklenemedi.'
						];
					}
				}
			}
			else
			{
				$message = [
					'class' => 'warning',
					'text' => 'Lütfen gerekli alanları doldurun.'
				];
			}
		}

		// Categories
		$sql = "SELECT id, name
		FROM product_categories
		WHERE deleted_at IS NULL";

		$categories = $this->db->query($sql, PDO::FETCH_OBJ);

		$data = [
			'old' => $data,
			'message' => $message,
			'categories' => $categories
		];

		return $this->view('admin.pages.products.create', $data);
    }

    public function update($id, Request $request)
    {
		$generator = new SlugGenerator;

		$message = [];		

		if ($request->getMethod() == 'POST')
		{
			$this->validator->rule('required', [
				'name',
				'description',
				'content'
			]);

			$data = $this->validator->data();

			if ($this->validator->validate())
			{
				$uploadError = false;

				$files = [];

				foreach ($_FILES['images'] as $k => $l)
				{
					foreach ($l as $i => $v)
					{
						if (!array_key_exists($i, $files))
						{
							$files[$i] = array();
						}

						$files[$i][$k] = $v;
					}
				}

				if ($files[0]['name'])
				{
					$images = [];

					foreach ($files as $file)
					{
						$handle = new Upload($file);

						if ($handle->uploaded)
						{
							$name = $generator->generate($data['name']) . '_' . hashid();
							$images[] = $name . '.jpg';

							$handle->allowed = ['image/*'];
							$handle->file_new_name_body = $name;
							$handle->image_convert = 'jpg';
							$handle->process('./uploads/images/original/products');

							$handle->allowed = ['image/*'];
							$handle->file_new_name_body = $name;
							$handle->image_convert = 'jpg';
							$handle->image_resize = true;
							$handle->image_x = 400;
							$handle->image_y = 400;
							$handle->image_ratio_crop = true;
							$handle->process('./uploads/images/cache/products/400x400');

							$handle->allowed = ['image/*'];
							$handle->file_new_name_body = $name;
							$handle->image_convert = 'jpg';
							$handle->image_resize = true;
							$handle->image_x = 40;
							$handle->image_y = 40;
							$handle->image_ratio_crop = true;
							$handle->process('./uploads/images/cache/products/40x40');

							if (!$handle->processed)
							{
								$uploadError = true;
							}
						}
						else
						{
							$uploadError = true;
						}

						$handle->clean();
					}
				}

				if ($uploadError)
				{
					$message = [
						'class' => 'danger',
						'text' => 'Bir hata oluştu ve resim(ler) yüklenemedi.'
					];
				}
				else
				{
					$name = $data['name'];
					$slug = $generator->generate($name);
					$description = $data['description'];
					$content = $data['content'];
					$video = $data['video'];
					$category_id = $data['category_id'];

					$sql = "UPDATE products SET
					name = :name,
					slug = :slug,
					description = :description,
					content = :content,
					video = :video,
					category_id = :category_id,
					WHERE id = :id";

					$query = $this->db->prepare($sql);

					$update = $query->execute([
						'name' => $name,
						'slug' => $slug,
						'description' => $description,
						'content' => $content,
						'video' => $video,
						'category_id' => $category_id,
						'id' => $id
					]);

					if ($update)
					{
						$insertError  = false;

						if (isset($images))
						{
							$i = 0;

							foreach ($images as $image)
							{
								$i++;

								$sql = "INSERT INTO product_images SET
								image = ?,
								product_id = ?";

								$query = $this->db->prepare($sql);

								$insert = $query->execute([
									$image,
									$id
								]);

								if (!$insert)
								{
									$insertError = true;
								}
							}
						}

						if ($insertError)
						{
							$message = [
								'class' => 'warning',
								'text' => 'Ürün resimleri eklenirken bir hata oluştu.'
							];
						}
						else
						{
							$message = [
								'class' => 'success',
								'text' => 'Ürün başarılı bir şekilde güncellendi.'
							];
						}
					}
					else
					{
						$message = [
							'class' => 'danger',
							'text' => 'Bir hata oluştu ve ürün güncellenemedi.'
						];
					}
				}
			}
			else
			{
				$message = [
					'class' => 'warning',
					'text' => 'Lütfen gerekli alanları doldurun.'
				];
			}
		}

		// Product
		$sql = "SELECT p.id AS id, p.name AS name, p.slug AS slug, p.description AS description, p.content AS content, p.video AS video, p.default_image AS default_image,
		pc.id AS category_id
		FROM products p
		INNER JOIN product_categories pc ON pc.id = p.category_id
		WHERE p.id = '{$id}'";

		$product = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

		if (!$product)
		{
			header('Location: ' . site_url('admin/products/approved'));
			exit;
		}

		// Images
		$sql = "SELECT id, url
		FROM product_images
		WHERE deleted_at IS NULL AND product_id = '{$id}'";

		$images = $this->db->query($sql, PDO::FETCH_OBJ);

		$data = [
			'message' => $message,
			'product' => $product,
			'images' => $images
		];

		// Categories
		$sql = "SELECT id, name
		FROM product_categories
		WHERE deleted_at IS NULL";

		$categories = $this->db->query($sql, PDO::FETCH_OBJ);

		$data = [
			'message' => $message,
			'product' => $product,
			'images' => $images,
			'categories' => $categories
		];

		return $this->view('admin.pages.products.update', $data);
    }

	public function delete($id)
	{
		$sql = "UPDATE products SET
		deleted_at = :deleted_at
		WHERE id = :id";

		$query = $this->db->prepare($sql);

		$update = $query->execute([
			'deleted_at' => date('Y-m-d H:i:s'),
			'id' => $id
		]);

		if ($update)
		{
			header('Location: ' . site_url('admin/products/approved'));
			exit;
		}
		else
		{
			//
		}
	}

	public function restore($id)
	{
		$sql = "UPDATE products SET
		deleted_at = :deleted_at
		WHERE id = :id";

		$query = $this->db->prepare($sql);

		$update = $query->execute([
			'deleted_at' => null,
			'id' => $id
		]);

		if ($update)
		{
			header('Location: ' . site_url('admin/products/unapproved'));
			exit;
		}
		else
		{
			//
		}
	}
}
