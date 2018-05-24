<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/Sao_Paulo');
// header('Content-Type: text/html; charset=ISO-8859-1');

$nome = $_POST['nome_responsavel'];
$sobrenome = $_POST['sobrenome_responsavel'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = date('d/m/Y H:i:s');
$body = "<html>
			<head>
			  <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
			  <title>Nature Fitness - Confirmação de Cadastro</title>
			</head>
			<body>
                <p>Olá, $nome $sobrenome,</p>

                <p>Sua conta em nosso site foi criada com sucesso.</p>
                
                <p>O proximo passo é criar o seu plano e cadastrar as crianças.</p>

                <p>Seu usuário é: <b>$email</b></p>
                <p>Sua senha é: <b>$senha</b></p>

                <br><br>
                <p>$data</p>
            </body>
            </html>
                ";

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = '';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port =  465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "";

//Password to use for SMTP authentication
$mail->Password = "";

//Set who the message is to be sent from
$mail->setFrom('', '');

//Set an alternative reply-to address
// $mail->addReplyTo('alessandro-martinns@hotmail.com', 'Alessandro');

//Set who the message is to be sent to
$mail->addAddress('', '');

//Set the subject line
$mail->Subject = '';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    // echo 'Ocorreu um erro ao enviar sua mensagem. Por favor, verifique se você preencheu os campos de forma correta e tente novamente.';
} else {
    // echo 'Sua solicitação de download foi efetuada com <strong>sucesso</strong>.';
}
