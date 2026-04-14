<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-10 02:19:41
  from 'C:\xampp\htdocs\scheduler\views\aluno.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5deef2ada9eb04_37360939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df39f05e5a94def8f5a7ec428ad1c4d8d9f8845' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scheduler\\views\\aluno.html',
      1 => 1575940765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deef2ada9eb04_37360939 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-br">

  <head>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/favicon.ico">

    <title>Scheduler</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
>


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
/css/calendario.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/aluno.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vCard template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap-4.1.2/bootstrap.min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/responsive.css">



    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.css">
</head>

<body class="back" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

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
            <img style="margin-bottom: -25%; margin-top: -20%" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo.png" alt="">
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
      </div>



    </header>

      <div class="ftco-blocks-cover-1">
        <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
       <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/aluno.jpg')">
         <div class="container">
           <div class="row align-items-center ">

             <div class="col-md-5 mt-5 pt-5">
               <span class="text-cursive h5 text-red">Esse é seu cantinho!</span>
               <p></p>
               <h1 class="mb-3 font-weight-bold text-teal">Área do estudante</h1>
               <!-- Início letrinhas -->
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

     <div class="content_container">
      <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

        <!-- General Information -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PES']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
        <div class="general_info d-flex flex-xl-column flex-md-row flex-column tio">
          <div>
            <div class="general_info_image">
              <div class="background_image col-lg-12" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['pes_foto'];?>
)"></div>
              <div class="header_button_2">
                <div class="d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/download.png" alt=""></div>
              </div>
            </div>
          </div>
          <div class="general_info_content infobox">
            <div class="general_info_content_inner mCustomScrollbar pessoainfo" data-mcs-theme="minimal-dark">
              <div class="general_info_title info pessoainfo">Seus Dados</div>
              <ul class="general_info_list">
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="general_info_icon d-flex flex-column align-items-start justify-content-center camposinfo"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/icon_1.png" alt=""></div>
                  <div class="general_info_text camposinfo">Nome: <span class="fonte1"><br><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['pes_sobrenome'];?>
</span></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="general_info_icon d-flex flex-column align-items-start justify-content-center camposinfo"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/icon_6.png" alt=""></div>
                  <div class="general_info_text camposinfo">Data de Nascimento: <span class="fonte1"><br><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_aniversario'];?>
</span></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="general_info_icon d-flex flex-column align-items-start justify-content-center camposinfo"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/icon_3.png" alt=""></div>
                  <div class="general_info_text camposinfo"><a href=""></a><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_email'];?>
</div>
                </li>
                <li>
                <form class="form-inline my-2 my-lg-0 align-items-center justify-content-start">
                </form>
              </li>
              </ul>
              <form class="camposinfo" action="<?php echo $_smarty_tpl->tpl_vars['GET_LOGOUT']->value;?>
" method="post">
              <a href="<?php echo $_smarty_tpl->tpl_vars['GET_LOGOUT']->value;?>
"><button class="btn btn-outline-light my-2 my-sm-0" name="logout" type="submit">Sair</button></a>
              </form>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!-- Social -->
            </div>
          </div>
        </div>

        <!-- Main Content -->
                <div class="col-md-9 filho">

                              <div class="month corg">
                                <div class="">
                                <ul class="nav" style="margin-top:-7.5%">
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MES']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                                  <li class="nav-item">
                                    <a class="nav-link  selecao" href="?mes_id=<?php echo $_smarty_tpl->tpl_vars['m']->value['mes_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['mes_abreviacao'];?>
</a>
                                  </li>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  </ul>
                                  </div>
                                  <div style="margin-top: 6%">
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MON']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                                <ul>
                                  <li>
                                  <?php echo $_smarty_tpl->tpl_vars['m']->value['mes_nome'];?>

                                  </li>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                </div>
                              </div>

                            <ul class="weekdays">
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEM']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
                              <li class="text-capitalize semana">
                              <?php echo $_smarty_tpl->tpl_vars['s']->value['dia_nome'];?>

                              </li>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>

                            <ul class="days">

                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AGE']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
                              <li class="agenda<?php echo $_smarty_tpl->tpl_vars['a']->value['age_info'];?>
">
                              <?php echo $_smarty_tpl->tpl_vars['a']->value['age_dia'];?>

                              <h2 class="info" align="center" style="color:black"><?php echo $_smarty_tpl->tpl_vars['a']->value['age_info'];?>

                              <br><?php echo $_smarty_tpl->tpl_vars['a']->value['age_materia'];?>
<label></label></h2>
                                  </li>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <!-- Fim dos produtos -->

                              </div>
                              </div>
                              </div>
              	              </div>

            <div class="" style="background: #EEEEEE">

          <div class="container containerq">
          <div class="container container2">
          <h2 id="aluno">Teste seus conhecimentos</h2>
          </div>
          <div class="site-section">
            <div class="container container">
              <div class="row">
                <div class="col-lg-4">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['GET_MATEMATICA']->value;?>
">
                  <div class="block-2 red">
                    <span class="wrap-icon">
                      <span class="icon-calculator"></span>
                    </span>
                    <h2>Matemática</h2>
                  </div>
                </div></a>
                <div class="col-lg-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_FISICA']->value;?>
">
                  <div class="block-2 red">
                    <span class="wrap-icon">
                      <span class="icon-wrench"></span>
                    </span>
                    <h2>Física</h2>
                  </div>
                </div></a>
                <div class="col-lg-4">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['GET_QUIMICA']->value;?>
">
                  <div class="block-2 red">
                    <span class="wrap-icon">
                      <span class="icon-filter"></span>
                    </span>
                    <h2>Química</h2>
                  </div>
                </div>
              </div>
            </div></a>


          <div class="site-section">
          <div class="container">
              <div class="row">
                <div class="col-lg-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HISTORIA']->value;?>
">
                  <div class="block-2 yellow">
                    <span class="wrap-icon">
                      <span class="icon-hourglass"></span>
                    </span>
                    <h2>História</h2>
                  </div>
                </div></a>
                <div class="col-lg-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_BIOLOGIA']->value;?>
">
                  <div class="block-2 yellow">
                    <span class="wrap-icon">
                      <span class="icon-leaf"></span>
                    </span>
                    <h2>Biologia</h2>
                  </div>
                </div></a>
                <div class="col-lg-4">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['GET_GEOGRAFIA']->value;?>
">
                  <div class="block-2 yellow">
                    <span class="wrap-icon">
                      <span class="icon-globe"></span>
                    </span>
                    <h2>Geografia</h2>
                  </div>
                </div>
              </div>
            </div></a>


          <div class="site-section">
              <div class="containerb">
                  <div class="row">
                    <div class="col-lg-4">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['GET_PORTUGUES']->value;?>
">
                      <div class="block-2 teal">
                        <span class="wrap-icon">
                          <span class="icon-font"></span>
                        </span>
                        <h2>Português</h2>
                      </div>
                    </div></a>

                    <div class="col-lg-4">
                       <a href="<?php echo $_smarty_tpl->tpl_vars['GET_INGLES']->value;?>
">
                      <div class="block-2 teal">
                        <span class="wrap-icon">
                          <span class="icon-flag"></span>
                        </span>
                        <h2>Inglês</h2>
                      </div>
                    </div></a>
                    <div class="col-lg-4">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['GET_LITERATURA']->value;?>
">
                      <div class="block-2 teal">
                        <span class="wrap-icon">
                          <span class="icon-book"></span>
                        </span>
                        <h2>Literatura</h2>
                      </div>
                    </div></a>
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>
            </div>






              <!-- Social -->
              <div class="social_container">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
              </div>



  <div align='center'>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

  </div>


  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/bootstrap-4.1.2/popper.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/bootstrap-4.1.2/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/greensock/TweenMax.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/greensock/TimelineMax.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/scrollmagic/ScrollMagic.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/greensock/animation.gsap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/greensock/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/progressbar/progressbar.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/easing/easing.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/parallax-js-master/parallax.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
  </body>
  </html>
<?php }
}
