<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-07 19:30:12
  from 'C:\xampp\htdocs\scheduler2\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5debefb48bb6a6_09933312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e37e5e981991961339425b6fd84114cc5e05c2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scheduler2\\views\\index.html',
      1 => 1575461886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5debefb48bb6a6_09933312 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="nav-link">Home</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SOBRE']->value;?>
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

      <div class="site-section-cover overlay">
        <div class="container">
          <div class="row align-items-center ">
            <div class="col-md-5 mt-5 pt-5" data-aos="fade-right">
              <span class="text-cursive h5 text-red">Bem-vindo a nosso site</span>
              <h1 class="mb-3 font-weight-bold text-teal">Onde aprender é um prazer!</h1>
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
              <p></p>
              <p class="mt-5"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HISTORIA']->value;?>
" class="btn btn-primary py-4 btn-custom-1">Nossa história</a></p>
            </div>
            <div class="col-md-6 ml-auto align-self-end">
              <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/kid_transparent.png" alt="Image" class="img-fluid">

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="block-2 red">
              <span class="wrap-icon">
                <span class="icon-home"></span>
              </span>
              <h2>Estude em casa</h2>
              <p>Agende sua rotina de estudos, tenha acesso ao calendário escolar e veja as aulas semanais, sem sair do conforto da sua casa.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="block-2 yellow">
              <span class="wrap-icon">
                <span class="icon-person"></span>
              </span>
              <h2>Aumente sua interação social</h2>
              <p>Através do cronograma de eventos promovidos pela escola, fique por dentro de todas as datas e divirta-se com os amigos.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="block-2 teal">
              <span class="wrap-icon">
                <span class="icon-cog"></span>
              </span>
              <h2>Mande bem no vestibular</h2>
              <p>Com um banco de questões específicas de cada área, você pode nivelar seu conhecimento para arrasar na prova.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/img_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto pl-md-5">
            <span class="text-cursive h5 text-red">Importância de organizar os estudos</span>
            <h3 class="text-black"></h3>
            <p><span>Manter uma rotina de estudos organizada e eficiente tem vários desafios: distrações, muitas disciplinas para estudar, dificuldade de se concentrar; falta de um local adequado de estudos, entre outras coisas.</span><span> A boa notícia é que a resposta para esses desafios pode estar na organização.</span><span> Ela te ajuda a manter o foco no que realmente importa, otimiza seu tempo de estudos e ainda melhora seu rendimento.</span></p>

            <p class="mt-5"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SOBRE']->value;?>
" class="btn btn-warning py-4 btn-custom-1">+ sobre nós</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-info">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Fique por dentro dos</span>
            <h2 class="text-white">Benefícios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/flaticon/svg/001-jigsaw.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-teal">Relações interdisciplinares</h3>
              <p>Com diversos textos, a plataforma te ensina a relacionar diversas áreas do conhecimento.</p>
              <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Projetos premiados e aulas interativas</a></p>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/flaticon/svg/002-target.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-success">Foco</h3>
              <p>Com a organização disponível em nosso site, você não perde nem um segundo de conteúdo.</p>
              <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">80% de aprovação em escolas militares</a></p>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/flaticon/svg/003-mission.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-danger">Chegue em primeiro</h3>
              <p>Com o Cantinho do Aluno você fica por dentro de todas as datas das avaliações da escola e do vestibular.</p>
              <p><a href="#" class="btn btn-success btn-custom-1 mt-4">1º Lugar no ENEM e vestibulares</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Comentários</span>
            <h2 class="text-black">O que nossos clientes acham sobre nós</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="testimonial-3-wrap">


              <div class="owl-carousel nonloop-block-13">
                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/person_1.jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Jonas Cardoso</h3>
                    <p class="position">Professor</p>
                    <p>Assim que meus alunos passaram a utilizar o Scheduler, percebi um aumento considerável nas notas, no foco e na dedicação deles nas aulas.</p>
                  </div>
                </div>

                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/person_3.jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Maria Augusta Mayrink</h3>
                    <p class="position">Pedagoga</p>
                    <p>O conteúdo disponível na plataforma estimula o aluno a buscar o conhecimento de maneira lúdica, além de relacionar com diferente áreas e atualidades.</p>
                  </div>
                </div>

                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/person_2.jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Saionara Pereira</h3>
                    <p class="position">Mãe</p>
                    <p>Meu filho melhorou o senso de organização, a atenção e interage muito mais com os amigos depois que a escola adquiriu a plataforma.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row mt-5 justify-content-center">

          <div class="col-md-8">


            <div class="row">
              <div class="col-lg-3 text-center">
                <span class="text-teal h2 d-block">3423</span>
                <span>Alunos aprovados</span>
              </div>
              <div class="col-lg-3 text-center">
                <span class="text-yellow h2 d-block">4398</span>
                <span>Membros</span>
              </div>
              <div class="col-lg-3 text-center">
                <span class="text-success h2 d-block">50+</span>
                <span>Escolas utilizando</span>
              </div>
              <div class="col-lg-3 text-center">
                <span class="text-danger h2 d-block">2000+</span>
                <span>Seguidores</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section py-5 bg-warning">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 d-flex">
          <h2 class="text-white m-0">Mude a vida de seus alunos</h2>
            <!-- Modal -->
        <button type="button" class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto " data-toggle="modal" data-target=".bd-example-modal-lg">Começar</button>
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



    <footer class="site-footer">

        <div class="row pt-1 mt-1 text-center">
          <div class="col-md-12">
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
