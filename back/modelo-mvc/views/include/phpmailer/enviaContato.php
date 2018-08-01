<?php

require_once('PHPMailerAutoload.php');

if( isset( $_POST['submit'] ) AND $_POST['submit'] == 'submit' ) {
    if( $_POST['nome'] != '' AND $_POST['celular'] != '' AND $_POST['email'] != '' AND $_POST['servico_medico'] != '' ) {
                $conteudo = "views/include/phpmailer/mensagemContato.php";
                $envio = ob_start();
                $template = require_once($conteudo);
                $message = ob_get_contents();
                $envio .= ob_get_clean();
                $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Esse e-mail foi enviado de: ' . $_SERVER['HTTP_REFERER'] : '';                

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
                $mail->Host = 'smtp.umbler.com';
                // use
                // $mail->Host = gethostbyname('smtp.gmail.com');
                // if your network does not support SMTP over IPv6

                //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                $mail->Port = 587;

                //Set the encryption system to use - ssl (deprecated) or tls
                $mail->SMTPSecure = 'tls';

                //Whether to use SMTP authentication
                $mail->SMTPAuth = true;

                //Username to use for SMTP authentication - use full email address for gmail
                $mail->Username = "contato@medicalkids.slz.br";

                //Password to use for SMTP authentication
                $mail->Password = "x)?CzY3VUw3";

                //Set who the message is to be sent from
                $mail->setFrom('contato@medicalkids.slz.br', 'Site contato: '.$_POST['nome'].'');

                //Set an alternative reply-to address
                // $mail->addReplyTo('alessandro-martinns@hotmail.com', 'Alessandro');

                //Set who the message is to be sent to
                $mail->addAddress('contato@medicalkids.slz.br', 'Medical Kids - Clínica Pediatrica');

                //Set the subject line
                $mail->Subject = ($_POST['assunto']);

                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body
                $mail->msgHTML($message);

                //Replace the plain text body with one created manually
                $mail->AltBody = 'Isso é uma mensagem de texto palno';

                //Attach an image file
                // $mail->addAttachment('images/phpmailer_mini.png');

                //send the message, check for errors
                if (!$mail->send()) {
                    // echo "Mailer Error: " . $mail->ErrorInfo;
                    // echo 'Ocorreu um erro ao enviar sua mensagem. Por favor, verifique se você preencheu os campos de forma correta e tente novamente.';
                } else {
                    // echo 'Nós recebemos sua mensagem com <strong>sucesso</strong> e entraremos em contato com você em breve.';
                }
     }else {
        // echo 'Por favor, preencha <strong>todos</strong> os campos e tente novamente.';
        }
}else {
        // echo 'Ocorreu um <strong>erro inesperado</strong>. Por favor, tente novamente mais tarde.';
}