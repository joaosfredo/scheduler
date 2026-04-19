<?php
/* Smarty version 3.1.34-dev-7, created on 2026-04-14 16:48:40
  from 'C:\xampp\htdocs\scheduler\views\estoria.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_69de53c8921df1_37520970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f3dbbbc7f195bf5b3c92e354a393a05fcd83601' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scheduler\\views\\estoria.html',
      1 => 1776169114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69de53c8921df1_37520970 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-br">
  <head>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/favicon.ico">

    <title>Scheduler</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/aos.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
     <!-- Inicio style letras -->

     <style>
        h1::after {
        content: '|';
        opacity: 1;
        margin-left: 5px;
        display: inline-block;
        animation: blink .9s infinite;
      }

      @keyframes blink {
        0%, 100% {
          opacity: 1;
        }
        50% {
          opacity: 0;
        }
      }
        </style>
        <!-- Fim style letras -->


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><img style="margin-bottom: -25%; margin-top: -20%" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo.png" alt=""></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                <span>Praça Dom Bosco, 88 - Carmo, Barbacena - MG, <br> Brasil</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Segunda - Sexta | 8:00 - 18:00 <br> Sábado FECHADO</span>
              </div>

            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>


              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="nav-link">Home</a></li>
                  <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SOBRE']->value;?>
" class="nav-link">Sobre</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_GALERIA']->value;?>
" class="nav-link">Galeria</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
" class="nav-link">Contato</a></li>
                </ul>
              </nav>
              <form class="form-inline my-2 my-lg-0" action="<?php echo $_smarty_tpl->tpl_vars['GET_LOGIN']->value;?>
" method="post">
                  <!-- Modal -->
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Entrar</button>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <!-- Login -->
        <div class="container1">
          <div class="content1 first-content1">
              <div class="first-column1">
                  <h2 class="title1 title-primary1">Bem Vindo Novamente!</h2>
                  <p class="description1 description-primary1">Para ter acesso à todas as informações</p>
                  <p class="description1 description-primary1">por favor insira seus dados</p>
              </div>
              <div class="second-column" action="<?php echo $_smarty_tpl->tpl_vars['GET_LOGIN']->value;?>
" method="post">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo.png" class="logo" alt="">
                  <form class="form">
                      <label class="label-input" for="">
                          <i class="far fa-envelope icon-modify"></i>
                          <input name="email" class="login" type="email" placeholder="Email">
                      </label>

                      <label class="label-input" for="">
                          <i class="fas fa-lock icon-modify"></i>
                          <input name="senha" class="login" type="password" placeholder="Password">
                      </label>


                      <button class="btn1 btn-second1" value="Logar" type="submit">Entrar</button>
                  </form>
              </div><!-- second column -->
          </div><!-- first content -->

      </div>
      <?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
        <!-- Fim login -->
        </div>
        </div>
        </div>
        <!-- Fim Modal -->
              </form>
          </div>
        </div>
      </header>

      <div class="ftco-blocks-cover-1">
          <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
         <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/sobrenos2.jpg')">
           <div class="container">
             <div class="row align-items-center ">

               <div class="site-section-cover">
                 <div class="container">
                   <div class="row align-items-center ">
                     <div class="col-md-12 mt-12 pt-12">
                       <span class="text-cursive h5 text-red">Bem-vindo a nosso site</span>
                       <h1 class="mb-3 font-weight-bold text-teal">Nossa história</h1>
                       <p><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Sobre</strong></p>
               <!-- Inicio letrinhas -->
               <?php echo '<script'; ?>
>

               function typeWriter(elemento) {
               const textoArray = elemento.innerHTML.split('');
               elemento.innerHTML = ' ';
               textoArray.forEach((letra, i) => {
                setTimeout(() => elemento.innerHTML += letra, 90 * i);
               });
               setTimeout(typeWriter2(elemento), 4000)
             }

             const titulo = document.querySelector('h1');
             typeWriter(titulo);


             <?php echo '</script'; ?>
>
             <!-- Fim letrinhas -->
                   </div>
                 </div>
               </div>
             </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <!-- Login -->
        <div class="container1">
          <div class="content1 first-content1">
              <div class="first-column1">
                  <h2 class="title1 title-primary1">Bem Vindo Novamente!</h2>
                  <p class="description1 description-primary1">Para ter acesso à todas as informações</p>
                  <p class="description1 description-primary1">por favor insira seus dados</p>
              </div>
              <div class="second-column">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo.png" class="logo" alt="">
                  <form class="form">
                      <label class="label-input" for="">
                          <i class="far fa-envelope icon-modify"></i>
                          <input class="login" type="email" placeholder="Email">
                      </label>

                      <label class="label-input" for="">
                          <i class="fas fa-lock icon-modify"></i>
                          <input class="login" type="password" placeholder="Password">
                      </label>

                      <button class="btn1 btn-second1">Entrar</button>
                  </form>
              </div><!-- second column -->
          </div><!-- first content -->

      </div>
      <?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
        <!-- Fim login -->
        </div>
        </div>
        </div>
        <!-- Fim Modal -->
          </div>
        </div>
      </div>
    </div>

      <div class="site-section bg-LightCyan">
             <div class="section-footer ">
               <div class="row justify-content section-2-title">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red">Nossa história</span>
            <h3 class="text-black text-center">O começo de tudo...</h3>
            <p class="mb-4">

          </div>
        </div>
        <div class="site-section py-5 bg-azul">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10 d-flex">
                  <h6>A Turma de Informática 2019 teve início com a implementação do EBEP, um programa de Ensino Básico Profissionalizante promovido pelo SESI/SENAI com intuito de preparar os alunos para a indústria atual. Com a grande demanda tecnológica do mercado, o sistema FIEMG investe em cursos que requerem essa tecnologia. O curso de Informática nada mais é do que o preparo para não só agora, mas para os próximos anos, com um mercado ainda mais mecanizado e desenvolvido. Além das vastas qualidades que podemos adquirir com este curso, o diploma reconhecido mundialmente é mais um adereço e meta valorizada pela sociedade e mercado.<p></p>
                    O curso disponibiliza ótimo material e professores qualificados a apresentar o conteúdo. Sem dúvidas, a formação dos alunos EBEP 2019 será de grande efeito, tanto para a sociedade quanto para o Serviço Nacional de Aprendizagem Industrial (SENAI), que será representado por alunos qualificados e preparados, trazendo todo o mérito não só para o corpo discente, mas também para o corpo docente, que disponibilizou recursos e instrumentos para essa formação. <p></p>
                    Durante o decorrer do curso, os alunos do EBEP juntamente com os professores Filipe Bento, Harley Teixeira, Lucas Do Vale, Áurio Augusto e Caster Luz desenvolveram diversos projetos. Dentre eles, estão: Química Interativa, um jogo que melhora o aprendizado e familiariza o indivíduo com a química, além de promover e difundir o interesse pela educação; Um ano de SENAI, um site em agradecimento por um ano de curso, evidenciando a competência dos profissionais da unidade; Teatro do SESI ao SENAI, um stand up que visava demonstrar a nossa rotina enquanto alunos do SESI e do SENAI, e transparecer nossa relação com os professores e instrutores.<p></p>
                    Com todas as experiências vivenciadas, para encerramento do curso profissionalizante de Técnico em Informática, o instrutor Caster Luz propôs ao EBEP um projeto do Serviço Nacional de Aprendizagem  Industrial (SENAI) que seja voltado para a indústria. Diante disso, nosso grupo elaborou um site que visa um direcionamento de ensino para as instituições que tiverem interesse em adquirir a plataforma para melhor organização, aprendizado e socialização entre professor/aluno.

                  </h6>

                </div>
              </div>
            </div>
          </div>

    </div>
    </div>
    <footer class="site-footer">
        <div class="row pt-1 mt-1 text-center">
          <div class="col-md-12 ">
            <div class="border-top pt-1">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved | This template is made</i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
    <!-- Botão Voltar -->
    <div class="site-section py-5 bg-azul">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 d-flex">
            <h2 class="text-white m-0">Volte para a página sobre</h2>
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SOBRE']->value;?>
" class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-migrate-3.0.0.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.sticky.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/aos.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/main.js"><?php echo '</script'; ?>
>

  </body>

</html>
<?php }
}
