<?php
session_start();
require_once('../../classes/database.class.php');
require_once('../../classes/phpmailer.class.php');
$con = new database();

extract($_POST);

if($nome && $email && $mensagem){
     /* Envio do E-mail */
    $mail = new PHPmailer();
    $nome = utf8_decode($nome);
    $mail->IsMail(true);
    $mail->IsHTML(true);
    $mail->SetLanguage("br");
    $mail->From       = $email;
    $mail->FromName   = $nome;
    $mail->AddAddress('comercial@estillomoveis.com.br', utf8_decode('Estillo Móveis'));

    $mensagem = "<b>Nome:</b> $nome<br>
        <b>E-mail:</b> $email<br>
        <b>Telefone Comercial:</b> $comercial<br>
        <b>Celular</b>: $celular<br>
        <b>CNPJ:</b> $cnpj<br>
        <b>Cidade - Estado:</b> $cidade - $estado<br>
        <b>Cep:</b> $cep<br>
        <b>Mensagem:</b> ".nl2br($mensagem);

    $corpo = '<BODY style="PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 14px; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-TOP: 150px; FONT-FAMILY: Arial, Helvetica, sans-serif" bgColor=#ffffff><DIV id=cabecalho style="PADDING-RIGHT: 0px; DISPLAY: block; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; MARGIN: 0px 0px 20px; WIDTH: 100%; PADDING-TOP: 0px; BORDER-BOTTOM: #949586 2px solid; POSITION: absolute; TOP: 0px; HEIGHT: 90px; TEXT-ALIGN: left"><IMG src="http://www.estillomoveis.com.br/mail/logo.jpg"><br/>Rua Remo Antonio Tomazzoni, 468C - Caxias do Sul - RS - CEP:95080-061<br>Fone: (54) 3226.3626</DIV><DIV>'.$mensagem.'</DIV></BODY></HTML>';
    $mail->Body = utf8_decode($corpo);
    $mail->Subject = utf8_decode('Contato enviado pelo site');
    if($mail->Send()){
        $_SESSION['alerta_msg'] = 'E-mail enviado com sucesso!';
        $_SESSION['alerta_tipo'] = 'sucesso';
    }else{
        $_SESSION['alerta_msg'] = 'Falha ao enviar o e-mail!';
        $_SESSION['alerta_tipo'] = 'erro';
    }
}else{
    $_SESSION['alerta_msg'] = 'Preencha todos os dados!';
    $_SESSION['alerta_tipo'] = 'erro';
}
header('location: /faleconosco/');
?>
