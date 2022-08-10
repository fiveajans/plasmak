<?php

namespace App\Controllers\Api;

use Core\Controller;
use Symfony\Component\HttpFoundation\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Subscribe extends Controller
{
	public function submit(Request $request)
	{
		if ($request->getMethod() == 'POST')
		{
			$email = $request->request->get('email');

			$mail = new PHPMailer(true);

			try
			{
				$mail->SMTPDebug = false; // SMTP::DEBUG_SERVER
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
				$mail->Subject = 'Plasmak - E-posta Kaydi';
				$mail->Body = 'E-posta kaydı başarılı!<br>E-posta Adresi: ' . $email;
				$mail->AltBody = 'Plasmak';

				$mail->send();

				return 'success';
			}
			catch (Exception $e)
			{
				return 'error';
			}
		}
	}
}
