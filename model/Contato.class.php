<?php

  class Contato extends Connect{

    function get_Contato(){

    $contatar = mysqli_connect(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_DATABASE);

    $nome = null;
    $sobrenome = null;
    $email = null;
    $mensagem = null;


    if (isset($_POST['contato_nome'])) {
      $nome = $_POST['contato_nome'];
    }
    if (isset($_POST['contato_sobrenome'])) {
      $sobrenome = $_POST['contato_sobrenome'];
    }
    if (isset($_POST['contato_email'])) {
      $email = $_POST['contato_email'];
    }
    if (isset($_POST['contato_mensagem'])) {
      $mensagem = $_POST['contato_mensagem'];
    }

    $sql = "INSERT INTO tb_contato(con_nome, con_sobrenome, con_email, con_mensagem)VALUES
      ('$nome', '$sobrenome', '$email', '$mensagem');";
      mysqli_query($contatar,$sql);

}
  }


 ?>
