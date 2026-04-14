<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-10 14:42:35
  from 'C:\xampp\htdocs\scheduler\views\gerente.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5defa0cb25e1b3_25132955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e72c502759f9d3dc15007984a1706ff54e6d55e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scheduler\\views\\gerente.html',
      1 => 1575985353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5defa0cb25e1b3_25132955 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-br">

  <head>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/favicon.ico">

    <title>Scheduler</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
/css/calendario.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/scheduler.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/cronograma.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vCard template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap-4.1.2/bootstrap.min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/responsive.css">

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>


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



    </header>

      <div class="ftco-blocks-cover-1">
        <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
       <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/gerente.jpg')">
         <div class="container">
           <div class="row align-items-center ">

             <div class="col-md-5 mt-5 pt-5">
               <span class="text-cursive h5 text-red">Esse é seu cantinho!</span>
               <p></p>
               <h1 class="mb-3 font-weight-bold text-teal">Área do gerente</h1>
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
        <div class="general_info2 d-flex flex-xl-column flex-md-row flex-column tio">
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
              <form class="camposinfo" method="post">
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target=".bd-example-modal-lg">Criar um evento</button>
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button>
              </form>
              <a href="<?php echo $_smarty_tpl->tpl_vars['GET_CADASTRO']->value;?>
"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Cadastrar</button></a>
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

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PES']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <!-- Inserir Informações no Calendário -->
                <div class="container1">
                  <div class="content1 first-content1">
                      <div class="first-column1" style="align:center">
                          <h2 class="title1 title-primary1">Bem vindo <?php echo $_smarty_tpl->tpl_vars['p']->value['pes_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['pes_sobrenome'];?>
!</h2>
                          <p class="description1 description-primary1">Altere o cronograma dos estudantes!</p>
                          <p class="description1 description-primary1">Adicione avaliações, simulados, trabalhos e tarefas de casa.</p>
                      </div>
                      <div class="second-column1" style="align:center;">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo.png" class="logo" alt="">
                          <form class="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['SCHEDULER']->value;?>
">
                            <!-- Dia -->
                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Dia</label>
                                <select name="dia" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                  <option selected>Selecione o dia</option>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AGE']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['age_dia'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['age_dia'];?>
</option>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                              </div>
                              <!-- Mês -->
                              <div class="col-auto my-1">
                                  <label class="mr-sm-2" for="inlineFormCustomSelect">Mês</label>
                                <select name="mes" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                  <option selected>Selecione o mês</option>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MES']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                                  <option class="text-capitalize" value="<?php echo $_smarty_tpl->tpl_vars['m']->value['mes_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['mes_nome'];?>
</option>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                              </div>
                              <!-- Matéria -->
                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Matéria</label>
                                <select name="materia" class="custom-select mr-sm-2" id="input" required>
                                  <option value="null" selected>Selecione a matéria</option>
                                  <option value="Matematica">Matemática</option>
                                  <option value="Fisica">Física</option>
                                  <option value="Quimica">Química</option>
                                  <option value="Geografia">Geografia</option>
                                  <option value="Historia">História</option>
                                  <option value="Biologia">Biologia</option>
                                  <option value="Portugues">Português</option>
                                  <option value="Literatura">Literatura</option>
                                  <option value="Ingles">Inglês</option>
                                </select>
                              </div>
                              <!-- Evento -->
                              <div class="col-auto my-1">
                                  <label class="mr-sm-2" for="inlineFormCustomSelect">Evento</label>
                                  <select name="evento" class="custom-select mr-sm-2" id="options" onchange="verifica(this.value)" required>
                                    <option value="null" selected>Selecione o evento</option>
                                    <option value="AV1">AV1</option>
                                    <option value="AV2">AV2</option>
                                    <option value="Simulado">Simulado</option>
                                  </select>
                                </div>

                             <button align="center" href="" class="btn1 btn-second1" value="Logar" type="submit">Criar</button>
                          </form>
                      </div><!-- second column -->

                  </div><!-- first content -->
              </div>
                <!-- Fim modal -->
                </div>
                </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PES']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                    <!-- Modal -->
                    <!-- Extra large modal -->

                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">

<table class="demo">
	<thead align="center">
	<tr>
    <th>Hor/Dia</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
	</tr>
	</thead>
	<tbody>
    <form class="" action="index.html" method="post">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
	<tr align="center">

    <th class="horario">7:00</th>
		<td><select class="cronograma custom-select mr-sm-2" name="70seg">
      <option value=""><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['pes_nome'];?>
</option>
    </select></td>
    <td><select class="cronograma custom-select mr-sm-2" name="70ter">
      <option value=""><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_nome'];?>
</option>
    </select></td>
    <td><select class="cronograma custom-select mr-sm-2" name="70qua">
      <option value=""><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_nome'];?>
</option>
    </select></td>
    <td><select class="cronograma custom-select mr-sm-2" name="70qui">
      <option value=""><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_nome'];?>
</option>
    </select></td>
    <td><select class="cronograma custom-select mr-sm-2" name="70sex">
      <option value=""><?php echo $_smarty_tpl->tpl_vars['p']->value['pes_nome'];?>
</option>
    </select></td>

	</tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr align="center">
  <th class="horario" align="center">7:50</th>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr align="center">
<th class="horario">8:40</th>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr align="center">
<th class="horario">9:50</th>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr align="center">
<th class="horario">10:40</th>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr align="center">
<th class="horario">11:30</th>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



</form>
	<tbody>
</table>


      </div>
    </div>
  </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


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
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/gerente.js"><?php echo '</script'; ?>
>
  </body>
  </html>
<?php }
}
