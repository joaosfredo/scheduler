<?php
/* Smarty version 3.1.34-dev-7, created on 2026-04-20 01:35:34
  from 'C:\xampp\htdocs\scheduler\views\cadastro.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_69e566c63649a0_86689307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '585eb127934e5021b07f276025408c95f48ef437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scheduler\\views\\cadastro.html',
      1 => 1776169114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e566c63649a0_86689307 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/cadastro.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center>
    <div class="container" style="margin-top: 5%">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, Gerente!</h2>
                <p class="description description-primary">Cadastre aqui os dados de seus alunos e professores</p>
            </div>
            <div class="second-column">
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo.png" class="logo" alt="">
                <form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['GET_CADASTRO']->value;?>
" class="form">
                    <label class="label-input" for="">
                        <input name="nome" type="nome" placeholder=" Nome" required maxlength="30">
                    </label>

                    <label class="label-input" for="">
                            <input name="sobrenome" type="sobrenome" placeholder=" Sobrenome" required maxlength="30">
                    </label>

                    <label class="label-input" for="">
                        <input name="senha" type="password" placeholder=" Senha" required minlength="8" maxlength="32">
                    </label>

                    <label class="label-input" for="">
                            <input name="nascimento" type="date" placeholder=" Data de nascimento" required maxlength="8">
                        </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="email" type="email" placeholder="Email" required>
                    </label>

                    <div class="div-select">
                            <select class="label-input"  name="categoria" id="categoria" required>
                                   <option>Categoria</option>
                                   <option value="1">Aluno</option>
                                   <option value="2">Professor</option>
                            </select>
                           </div>
                           <span class="icon-warning"></span>

                    <label class="label" for='selecao-arquivo'></label>
                    <input name="imagem" id='selecao-arquivo' type='file'>

                    <button class="btn btn-second">Cadastrar</button>
                    <button href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="btn btn-second">Cancelar</button>
                </form>
            </div><!-- second column -->
        </div><!-- first content -->

    </div>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/app.js"><?php echo '</script'; ?>
>
    </center>
</body>
</html>
<?php }
}
