<?php
//Variáveis
session_start(); 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['msg'];
$arquivo = "
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
$emailenviar = "limafeli@br920.hostgator.com.br";
$destino = "limamr.felipe@gmail.com";
$assunto = "Contato pelo Site";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Meu Site <limafeli@br920.hostgator.com.br>';  
$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
  $_SESSION['valor'] = 1;
	$_SESSION['msg'] = '<p style="color: white;">Mensagem enviada com sucesso!</p>';
  header ("Location: ../index.php?#contato");
}else {
  $_SESSION['valor'] = 0;
	$_SESSION['msg'] = '<p style="color: red;">Falha ao enviar Mensagem!</p>';
  header ("Location: ../index.php?#contato");
  }

?>