<?php



  $subject    = 'Formulário do site Dia do Arauto'; // Subject of your email

  $to         = 'contato@diadoarauto.com.br'; //Your e-mail address

  $headers    = 'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $message    = 'Nome: ' . $_POST['name'] . ' <br/>' .
                'E-mail: ' . $_POST['email'] . ' <br/>' .
                'Telefone: ' . $_POST['phone'] . ' <br/>' .
                'Site: ' . $_POST['website'] . ' <br/>' .
                'Mensagem: ' . $_POST['message'];


  if(mail($to, $subject, $message, $headers)){
      header("Location: ../sucesso.html");
  }
  else{
    header("Location: ../falha.html");
  }

  //echo "optimize";

?>
