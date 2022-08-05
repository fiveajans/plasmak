<?php

namespace App\Controllers\Client;

use App\Controllers\Client;
use Symfony\Component\HttpFoundation\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//use PDO;

class ContactUs extends Client
{
	public function index(Request $request)
	{
		$this->data['message'] = [];
		$this->data['old'] = [];

		if ($request->getMethod() == 'POST')
		{
			$this->validator->rule('required', [
				'name',
				'email',
				'phone',
				'message'
			]);

			if ($this->validator->validate())
			{
				$data = $this->validator->data();

				$this->data['old'] = $data;

				$name = $data['name'];
				$email = $data['email'];
				$phone = $data['phone'];
				$subject = $data['subject'];
				$message = $data['message'];
				$robot = $data['robot'];

				if ($robot == '06')
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
						$mail->Subject = 'Plasmak - Iletisim Formu';
						$mail->Body = '<b>E-posta:</b> ' . $email . '<br>' . '<b>Telefon:</b> ' . $phone . '<br>' . '<b>Konu:</b> ' . $subject . '<br>' . '<b>Ad Soyad:</b> ' . $name . '<br>' . '<b>Mesaj:</b> ' . $message;
						$mail->AltBody = 'Plasmak';

						$mail->send();
						
						$this->data['message'] = [
							'class' => 'success',
							'text' => 'Başarılı! Mesajınız bize ulaştı.'
						];
					}
					catch (Exception $e)
					{
						$this->data['message'] = [
							'class' => 'danger',
							'text' => 'Hata! Bir sorun oluştu ve mesajınız gönderilemedi.'
						];
					}
				}
				else
				{
					$this->data['message'] = [
						'class' => 'danger',
						'text' => 'Hata! Robot kontrolünden geçemediniz.'
					];
				}
			}
			else
			{
				$this->data['message'] = [
					'class' => 'danger',
					'text' => 'Hata! Lütfen tüm alanları doldurun.'
				];
			}
		}

		return $this->view('client.pages.contact-us', $this->data);
	}
}
