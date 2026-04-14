<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-07 19:30:12
  from 'C:\xampp\htdocs\scheduler2\views\error.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5debefb4a2e881_81910140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c1e40dbc74d66a1662cd81b681488f506b1a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scheduler2\\views\\error.html',
      1 => 1575461884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5debefb4a2e881_81910140 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>ERRO 404</title>

	<!-- ícone navegador -->
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
image/icon.png">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/font-awesome.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/error.css" />



</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-bg">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<h1>oops!</h1>
			<h2>Erro 404 : Desculpe, página não encontrada!</h2>
			<a href="#">Voltar</a>
		</div>
	</div>

</body>

</html>
<?php }
}
