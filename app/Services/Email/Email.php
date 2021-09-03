<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class EmailService
{
            public static function SendEMail($data)
            {
                        // Instância da classe
                        $mail = new PHPMailer(true);
                        try
                        {
                          // Configurações do servidor
                          $mail->isSMTP();        //Devine o uso de SMTP no envio
                          $mail->SMTPAuth = true; //Habilita a autenticação SMTP
                          $mail->Username   = '';
                          $mail->Password   = '';
                          // Criptografia do envio SSL também é aceito
                          $mail->SMTPSecure = 'tls';
                          // Informações específicadas pelo Google
                          $mail->Host = 'smtp.gmail.com';
                          $mail->Port = 587;
                          // Define o remetente
                          $mail->setFrom('', 'developer');
                          // Define o destinatário
                          $mail->addAddress($data['email'], $data['name']);
                          // Conteúdo da mensagem
                          $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
                          $mail->Subject = $data['subject'];
                          $mail->Body    = $data['body'];
                          $mail->AltBody = $data['altBody'];
                          // Enviar
                          $mail->send();
                          echo 'A mensagem foi enviada!';
                        }
                        catch (Exception $e)
                        {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
            }
}