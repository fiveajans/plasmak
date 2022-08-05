<?php

namespace App\Controllers;

use Core\Controller;
use Exception;
use PDO;
use Symfony\Component\HttpFoundation\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

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

		$request = new Request;

		$this->data['subscribe'] = [];

		if ($request->getMethod() == 'POST')
		{
			$subscribe = $request->request->get('subscribe');

			if ($subscribe)
			{
				$mail = new PHPMailer(true);

				try
				{
					$mail->SMTPDebug = SMTP::DEBUG_SERVER;
					$mail->isSMTP();
					$mail->Host = 'smtp.yandex.com.tr';
					$mail->SMTPAuth = true;
					$mail->Username = 'musteri@fiveajans.com';
					$mail->Password = '28373404h';
					$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
					$mail->Port = 465;

					$mail->setFrom('musteri@fiveajans.com', 'Plasmak');
					$mail->addAddress('info@plasmak.com.tr');

					$mail->isHTML(true);
					$mail->Subject = 'Plasmak - E-posta Kaydı';
					$mail->Body = 'E-posta kaydı başarılı! E-posta Adresi: ' . $subscribe;
					$mail->AltBody = 'Plasmak';

					$mail->send();
					
					$this->data['subscribe'] = [
						'class' => 'success',
						'text' => 'E-posta kaydı başarılı!'
					];
				}
				catch (Exception $e)
				{
					$this->data['subscribe'] = [
						'class' => 'danger',
						'text' => 'Hata! Bir sorun oluştu ve e-posta kaydınız gerçekleşmedi.'
					];
				}
			}
		}
	}
}
