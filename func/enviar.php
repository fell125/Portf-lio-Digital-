<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

session_start(); 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['msg'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';


if ($nome == ""){
    $_SESSION['valor'] = 3;
    $_SESSION['msg'] = '<p style="color: white;font-size:20px;">Não tente me burlar ;)</p>';
    header ("Location: ../index.php?#contato");
}else if ($email == ""){
    $_SESSION['valor'] = 3;
    $_SESSION['msg'] = '<p style="color: white;font-size:20px;">Não tente me burlar ;)</p>';
    header ("Location: ../index.php?#contato");
}else if ($telefone == ""){
    $_SESSION['valor'] = 3;
    $_SESSION['msg'] = '<p style="color: white;font-size:20px;">Não tente me burlar ;)</p>';
    header ("Location: ../index.php?#contato");
}else if ($mensagem == ""){
    $_SESSION['valor'] = 3;
    $_SESSION['msg'] = '<p style="color: white;font-size:20px;">Não tente me burlar ;)</p>';
    header ("Location: ../index.php?#contato");
} else{


  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'mail.limafelipe.com.br';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'contato@limafelipe.com.br';                 // SMTP username
      $mail->Password = 'raspuca00#';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('limamr.felipe@gmail.com', 'Felipe');
      $mail->addAddress('limamr.felipe@gmail.com', 'felipe');     // Add a recipient

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Email de '.$nome;
      $mail->Body    = "
        <style type='text/css'>
        body {
        margin:0px;
        font-family:Verdane;
        font-size:12px;
        color: #666666;
        }
        a{
        color: #666666;
        text-decoration: none;
        }
        a:hover { 
        color: #FF0000;
        text-decoration: none;
        }
        </style>
        <html>
            <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#fff'>
            
              <tr>
                     <td width='500'>Nome:$nome</td>
                    </tr>
                    <tr>
                      <td width='320'>E-mail:<b>$email</b></td>
              </tr>
              <tr>
                      <td width='320'>Telefone:<b>$telefone</b></td>
                    </tr>
                    <tr>
                      <td width='320'>Mensagem:<b>$mensagem</b></td>
                    </tr> 
            </table>
        </html>
        ";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      $_SESSION['valor'] = 1;
      $_SESSION['msg'] = '<p style="color: white; font-size:20px">Mensagem enviada com sucesso!</p>';
      header ("Location: ../index.php?#contato");
  } catch (Exception $e) {
      $_SESSION['valor'] = 0;
      $_SESSION['msg'] = '<p style="color: red; font-size:20px">Falha ao enviar email :(</p>';
      echo $mail->ErrorInfo;
  }
}