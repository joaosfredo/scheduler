<?php

include "connect.php";

//Arquivos de conexão com o banco de dados
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];

//Arquivos de upload
$foto = $_FILES['imagem']['name'];

//Local das imagens dos usuários cadastrados
$pasta = '../users';

echo "Nome: ".$nome."<br>";
echo "Sobrenome: ".$sobrenome."<br>";
echo "Senha: ".$senha."<br>";
echo "Nascimento: ".$nascimento."<br>";
echo "Email: ".$email."<br>";
echo "Categoria: ".$categoria."<br>";
echo "Foto de perfil: ".$foto."<br>";

$sql = "INSERT INTO tb_pessoa(pes_nome, pes_sobrenome, pes_senha, pes_aniversario, pes_cat_categoria, pes_foto, pes_email)VALUES
    ('$nome','$sobrenome','$senha','$nascimento','$categoria','$foto','$email');";
    mysqli_query($link,$sql);

//Upload das imagens    
move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta."/".$foto);

echo "<a href='cadastro.php'>Cadastrar outro usuário</a>";    

?>