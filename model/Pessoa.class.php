<?php

  class Pessoa extends Connect{

      function __construct(){

        parent::__construct();

      }

      public static $msg = "0";

          // Captura Informações para Cadastro
          function get_Login(){

            $logar = mysqli_connect(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_DATABASE);

            $email = null;
            $senha = null;
            $login = null;
            $pass = null;
            $cat = null;
            $id = null;


            if (isset($_POST['email'])) {
              $email = $_POST['email'];
              $_SESSION['email_user'] = $email;
            }
            if (isset($_POST['senha'])) {
              $senha = $_POST['senha'];
              $_SESSION['senha_user'] = $senha;
            }

            if(isset($_SESSION['email_user']) && isset($_SESSION['senha_user'])){
               $sql = mysqli_query($logar,"SELECT * FROM tb_pessoa WHERE pes_email = '$email'");
               while($dados = mysqli_fetch_array($sql)){
                  $login = $dados['pes_email'];
                  $pass = $dados['pes_senha'];
                  $cat = $dados['pes_cat_categoria'];
                  $_SESSION['id_user'] = $dados['pes_id'];
                  $_SESSION['cat_user'] = $dados['pes_cat_categoria'];
               }}
               self::$msg = "0";
            if($email == $login && $senha == $pass){

               switch($cat){
                  case "1":
                     $_SESSION['status'] = "1";
                     header('location: '.Rotas::get_SiteAluno());
                     break;
                  case "2":
                     $_SESSION['status'] = "1";
                     header('location: '.Rotas::get_SiteProfessor());
                     break;
                  case "3":
                     $_SESSION['status'] = "1";
                     header('location: '.Rotas::get_SiteGerente());
                     break;
               }
            }else{
               self::$msg = "1";
          }
        }

          // Desconecta o usuários
          function get_Logout(){

            if(isset($_POST["logout"])){
              unset ($_SESSION["email_user"]);
              unset ($_SESSION["senha_user"]);
              unset ($_SESSION['id_user']);
              unset ($_SESSION['status']);
              unset ($_SESSION['cat_user']);
              header("location: ".Rotas::get_SiteHome());

            }
          }

          // Verifica a validade do Login do Aluno
          function Login_A(){
            $l = $_SESSION["email_user"];
            $s = $_SESSION["senha_user"];
            $c = $_SESSION['cat_user'];

            if($l !=null && $s !=null && $c == 1){
            }else{
                if ($c == 2) {
                  header("location: ".Rotas::get_SiteProfessor());
                }else {
                  if($c == 3){
                  header("location: ".Rotas::get_SiteGerente());
                }
            }
          }
        }

          // Verifica a validade do Login do Gerente
          function Login_P(){
            $l = $_SESSION["email_user"];
            $s = $_SESSION["senha_user"];
            $c = $_SESSION['cat_user'];

            if($l !=null && $s !=null && $c == 2){
            }else{
                if ($c == 1) {
                  header("location: ".Rotas::get_SiteAluno());
                }else {
                  if($c == 3){
                  header("location: ".Rotas::get_SiteGerente());
                }else{
                  header("location: ".Rotas::get_SiteHome());
                }
            }
            }
          }

          // Verifica a validade do Login do Gerente
          function Login_G(){
            $l = $_SESSION["email_user"];
            $s = $_SESSION["senha_user"];
            $c = $_SESSION['cat_user'];

            if($l !=null && $s !=null && $c == 3){
            }else{
                if ($c == 1) {
                  header("location: ".Rotas::get_SiteAluno());
                }else {
                  if($c == 2){
                  header("location: ".Rotas::get_SiteProfessor());
                }else{
                  header("location: ".Rotas::get_SiteHome());
                }
            }
            }
          }

          // Capturar Informações das Pessoas

          function get_Info(){

            $query = "SELECT * FROM tb_pessoa WHERE pes_id =".$_SESSION['id_user'];

            $this->executeSQL($query);
            $this->get_Lista();

            }

          // método de listas
          private function get_Lista(){
            $i=1;
            while($lista = $this->listData()):
              $this->itens[$i] = array(
                'pes_id' => $lista['pes_id'],
                'pes_nome' => $lista['pes_nome'],
                'pes_email' => $lista['pes_email'],
                'pes_sobrenome' => $lista['pes_sobrenome'],
                'pes_aniversario' => $lista['pes_aniversario'],
                'pes_cat_categoria' => $lista['pes_cat_categoria'],
                'pes_foto' => "../users/". $lista['pes_foto']
              );
              $i++;
          endwhile;
            }

            // Capturar Informações dos Professores

            function get_Professor(){

              $query = "SELECT * FROM tb_pessoa WHERE pes_cat_categoria = '2'";

              $this->executeSQL($query);
              $this->get_Lista2();

              }

            // método de listas
            private function get_Lista2(){
              $i=1;
              while($lista = $this->listData()):
                $this->itens[$i] = array(
                  'pes_id' => $lista['pes_id'],
                  'pes_nome' => $lista['pes_nome']

                );
                $i++;
            endwhile;
              }

          // Captura Informações para Cadastro
          function get_Cadastro(){

          $cadastrar = mysqli_connect(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_DATABASE);

          $nome = null;
          $sobrenome = null;
          $senha = null;
          $nascimento = null;
          $email = null;
          $categoria = null;
          $foto = null;
          if (isset($_POST['nome'])) {
            $nome = $_POST['nome'];
          }
          if (isset($_POST['sobrenome'])) {
            $sobrenome = $_POST['sobrenome'];
          }
          if (isset($_POST['senha'])) {
            $senha = $_POST['senha'];
          }
          if (isset($_POST['nascimento'])) {
            $nascimento = $_POST['nascimento'];
          }
          if (isset($_POST['email'])) {
            $email = $_POST['email'];
          }
          if (isset($_POST['categoria'])) {
            $categoria = $_POST['categoria'];
          }

          //Arquivos de upload
          if (isset($_FILES['imagem'])) {
            $foto = $_FILES['imagem']['name'];
          }

          //Local das imagens dos usuários cadastrados
          $pasta = './users';

          $sql = "INSERT INTO tb_pessoa(pes_nome, pes_sobrenome, pes_senha, pes_aniversario, pes_cat_categoria, pes_foto, pes_email)VALUES
            ('$nome','$sobrenome','$senha','$nascimento','$categoria','$foto','$email');";
            mysqli_query($cadastrar,$sql);

          //Upload das imagens
          if (isset($_FILES['imagem'])) {
            move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta."/".$foto);
          }

          }

  }

 ?>
