<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-07 19:54:37
  from 'C:\xampp\htdocs\scheduler\views\quimica.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5debf56d8fdcd0_12063793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8025adc450f199b13a7c9c6220976a75140b44e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scheduler\\views\\quimica.html',
      1 => 1575730267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5debf56d8fdcd0_12063793 (Smarty_Internal_Template $_smarty_tpl) {
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
/css/questoes.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


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
/images/quimica.jpg')">
         <div class="container">
           <div class="row align-items-center ">

             <div class="col-md-5 mt-5 pt-5">
               <span class="text-cursive h5 text-red">Hora de arrasar!</span>
               <p></p>
               <h1 class="mb-3 font-weight-bold text-teal">Química</h1>
             </div>

           </div>
         </div>
       </div>
     </div>

     <h2 for="" class="alerta<?php echo Verificacao::$aVisibilidade;?>
" align="center">PREENCHA TODAS AS QUESTÕES</h2>

          <form class="" action="<?php echo $_smarty_tpl->tpl_vars['REFAZER']->value;?>
" method="post">

          <div class="container resultado<?php echo Verificacao::$rVisibilidade;?>
">
              <div class="card questoes">
                <div class="card-header" style="background: <?php echo Verificacao::$resultado;?>
">
                  <h3>Resultados</h3>
                </div>
                 <div class="card-body">
                   <blockquote class="blockquote mb-0">
                     <label for="">Sua porcentagem de acerto foi de:</label>
        <div class="progress" style="height: 30px;">
          <div class="progress-bar progress-bar-striped bg-<?php echo Verificacao::$cor;?>
" role="progressbar" style="width: <?php echo Verificacao::$soma*10;?>
%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo Verificacao::$soma*10;?>
%</div>
        </div>
      </blockquote> <blockquote class="blockquote mb-0">
        <p></p><label for="">Você acertou:</label>
        <label class="resultado" for="" style="font-weight:bold; color: <?php echo Verificacao::$resultado;?>
;"><?php echo Verificacao::$soma;?>
</label>
        <label for="">das 10 questões disponíveis.</label>
      </blockquote>
      <button class="btn btn-outline-<?php echo Verificacao::$cor;?>
" type="submit" name="refazer" style="float: left"><span class="icon-repeat"></span> TENTE OUTRA VEZ</button>
     </form>
     <a href="<?php echo $_smarty_tpl->tpl_vars['GET_ALUNO']->value;?>
"><button class="btn btn-outline-<?php echo Verificacao::$cor;?>
" type="button" style="float: right"><span class="icon-home"></span> VOLTAR A SUA PÁGINA</button></a>
                       </div>

                 </div>
               </div>

     <form action="<?php echo $_smarty_tpl->tpl_vars['SOMA']->value;?>
" method="post">
<!-- Questão 1 -->
     <div class="container">
     <div class="card questoes">
        <div class="card-header class<?php echo Verificacao::$q1;?>
">
          <h3>Questão 1</h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <h4>(Udesc-SC) O grau de ionização (α) indica a porcentagem das moléculas dissolvidas na água que sofreram ionização, e a constante de ionização Ka indica se um ácido é forte, moderado ou fraco. Partindo desses pressupostos, escolha a alternativa abaixo que apresenta a ordem decrescente de ionização dos ácidos, considerando soluções aquosas a 1 mol/L: <br><br>            HCN (Ka = 6,1.10–10), HF (Ka = 6,3.10–4), CH3COOH (Ka = 1,8.10–5) e HClO4 (Ka = 39,8)</h4>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="q1" id="exampleRadios1" value="0">
            <label class="form-check-label" for="exampleRadios1">
             <h5>HCN > CH3COOH > HF > HClO4</h5>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="q1" id="exampleRadios2" value="0">
            <label class="form-check-label" for="exampleRadios2">
              <h5>HClO4 > CH3COOH > HF > HCN</h5>
            </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="exampleRadios1" value="0">
              <label class="form-check-label" for="exampleRadios1">
                  <h5>HF > CH3COOH > HClO4 > HCN</h5>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="exampleRadios2" value="0">
              <label class="form-check-label" for="exampleRadios2">
                  <h5>HCN > HClO4 > HF > CH3COOH</h5>
              </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="exampleRadios2" value="1">
                <label class="form-check-label" for="exampleRadios2">
                  <h5>HClO4 > HF > CH3COOH > HCN (V)</h5>
                </label>
              </div>
          </blockquote>
        </div>
      </div>
    </div>


<!-- Questão 2 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q2;?>
">
         <h3>Questão 2</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>(UFTM-MG) Observe a tabela que considera volumes iguais de quatro soluções aquosas de ácidos com mesma concentração em quantidade de matéria (mol.L–1) e valores aproximados da constante de equilíbrio (Ka).</h4>
           <center>
               <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/tabela.jpg">
           </center>
           <h4>Sobre essas soluções, pode-se afirmar que:</h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q2" id="exampleRadios1" value="0">
           <label class="form-check-label" for="exampleRadios1">
            <h5>o HClO(aq) é o mais ionizado.</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q2" id="exampleRadios2" value="0">
           <label class="form-check-label" for="exampleRadios2">
             <h5>o HCN(aq) é o que apresenta maior acidez.</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q2" id="exampleRadios1" value="1">
             <label class="form-check-label" for="exampleRadios1">
              <h5>o HNO2(aq) é o mais ionizado. (V)</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q2" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>o H3C–COOH(aq) é o que apresenta maior acidez.</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q2" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
                <h5>o HCN(aq) é o mais ionizado.</h5>
               </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>

<!-- Questão 3 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q3;?>
">
         <h3>Questão 3</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>Dadas as constantes de ionização dos ácidos abaixo:</h4>
           <center>
               <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/tabela1.jpg">
           </center>
           <h4>Podemos afirmar que:</h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q3" id="exampleRadios1" value="0">
           <label class="form-check-label" for="exampleRadios1">
            <h5>o ácido mais forte é o HCN.</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q3" id="exampleRadios2" value="0">
           <label class="form-check-label" for="exampleRadios2">
             <h5>o ácido mais forte é o HNO2.</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q3" id="exampleRadios1" value="1">
             <label class="form-check-label" for="exampleRadios1">
              <h5>o ácido mais forte é o H2SO4. (V)</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q3" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>o ácido mais forte é o H3PO4.</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q3" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
                <h5>n.d.a.</h5>
               </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>


<!-- Questão 4 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q4;?>
">
         <h3>Questão 4</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>Em um laboratório, um químico manipula dois frascos, sendo que cada um deles possui um ácido diferente. No rótulo do primeiro, está escrito ácido acético (H3CCOOH), cuja constante de ionização é de 1,8.10-5. No outro frasco, está escrito ácido hipocloroso (HClO), cuja constante de ionização é de 3,5.10-8. A partir dessas informações, o químico pôde concluir que:</h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q4" id="exampleRadios1" value="0">
           <label class="form-check-label" for="exampleRadios1">
            <h5>uma solução de ácido hipocloroso contém mais íons hidrônio (H+) do que uma solução de ácido acético.</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q4" id="exampleRadios2" value="1">
           <label class="form-check-label" for="exampleRadios2">
             <h5>o ácido acético é mais forte que o ácido hipocloroso. (V)</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q4" id="exampleRadios1" value="0">
             <label class="form-check-label" for="exampleRadios1">
              <h5>o ácido hipocloroso é mais solúvel que o ácido acético.</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q4" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5> o ácido hipocloroso é mais forte que o ácido acético.</h5>
             </label>
           </div>
           <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="exampleRadios2" value="0">
            <label class="form-check-label" for="exampleRadios2">
                <h5>a fórmula molecular do ácido acético é HClO</h5>
             </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>


<!-- Questão 5 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q5;?>
">
         <h3>Questão 5</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>A preocupação com o efeito estufa tem sido cada vez mais notada. Em alguns dias do verão de 2009, a temperatura na cidade de São Paulo chegou a atingir 34 ºC. O valor dessa temperatura em escala Kelvin é:</h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q5" id="exampleRadios1" value="0">
           <label class="form-check-label" for="exampleRadios1">
            <h5>239,15</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q5" id="exampleRadios2" value="1">
           <label class="form-check-label" for="exampleRadios2">
             <h5>307,15 (V)</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q5" id="exampleRadios1" value="0">
             <label class="form-check-label" for="exampleRadios1">
              <h5>273,15</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q5" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>1,91</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q5" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
                <h5>– 307,15</h5>
               </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>



<!-- Questão 6 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q6;?>
">
         <h3>Questão 6</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>Lorde Kelvin verificou experimentalmente que, quando um gás é resfriado de 0 ºC para -1 ºC, por exemplo, ele perde uma fração de sua pressão igual a 1/273,15. Raciocinou então que na temperatura de -273,15 ºC a pressão do gás se tornaria nula, ou seja, a energia cinética das partículas do gás seria igual a zero. Kelvin denominou a temperatura de -273,15 ºC de zero absoluto. <br><br>

                Identifique a alternativa em que a conversão de unidades é incorreta:
                </h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q6" id="exampleRadios1" value="0">
           <label class="form-check-label" for="exampleRadios1">
            <h5>0 ºC é igual a 273,15 K.</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q6" id="exampleRadios2" value="0">
           <label class="form-check-label" for="exampleRadios2">
             <h5>-100 ºC é igual a 173,15 K.</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q6" id="exampleRadios1" value="1">
             <label class="form-check-label" for="exampleRadios1">
              <h5>É a estrutura que participa da síntese de lipídeos. (V))</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q6" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>500 k é igual a 226,85 ºC.</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q6" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
              <h5>300 k é igual a 26,85 ºC.</h5>
               </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>


<!-- Questão 7 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q7;?>
">
         <h3>Questão 7</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>(ITA-SP) Para medir a febre de pacientes, um estudante de medicina criou sua própria escala linear de temperaturas. Nessa nova escala, os valores de O (zero) e 10 (dez) correspondem, respectivamente, a 37°C e 40°C. A temperatura de mesmo valor numérico em ambas as escalas é aproximadamente:</h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q7" id="exampleRadios1" value="1">
           <label class="form-check-label" for="exampleRadios1">
            <h5>52,9 ºC (V)</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q7" id="exampleRadios2" value="0">
           <label class="form-check-label" for="exampleRadios2">
             <h5>28,5 ºC</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q7" id="exampleRadios1" value="0">
             <label class="form-check-label" for="exampleRadios1">
              <h5>74,3 ºC</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q7" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>- 8,5 ºC</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q7" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
              <h5>- 28,5 ºC</h5>
               </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>


<!-- Questão 8 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q8;?>
">
         <h3>Questão 8</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>(UNIVALI-SC) O gosto amargo, característico da cerveja, deve-se ao composto mirceno, proveniente das folhas de lúpulo, adicionado à bebida durante a sua fabricação.</h4>
           <center>
               <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/molecula.jpg">
           </center>
           <h4>A fórmula estrutural do mirceno apresenta:</h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q8" id="exampleRadios1" value="0">
           <label class="form-check-label" for="exampleRadios1">
            <h5>Um carbono terciário.</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q8" id="exampleRadios2" value="0">
           <label class="form-check-label" for="exampleRadios2">
             <h5>Cinco carbonos primários.</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q8" id="exampleRadios1" value="0">
             <label class="form-check-label" for="exampleRadios1">
              <h5>Cadeia carbônica heterogênea.</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q8" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>Cadeia carbônica saturada e ramificada.</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q8" id="exampleRadios2" value="1">
               <label class="form-check-label" for="exampleRadios2">
              <h5>Cadeia carbônica acíclica e insaturada. (V)</h5>
               </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>

<!-- Questão 9 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q9;?>
">
         <h3>Questão 9</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>Classifique em V ou F as sentenças relacionadas aos carbonos numerados da seguinte cadeia:</h4>
           <center>
               <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/molecula1.jpg">
           </center>
           <h4>(   ) os carbonos I, II e IV são primários <br>
                (   ) o carbono III se classifica como secundário <br>
                (   ) na cadeia há somente um carbono quaternário <br>
                (   ) o carbono IV recebe a classificação de terciário <br>
                (   ) existem 5 carbonos primários na cadeia <br>
            </h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q9" id="exampleRadios1" value="1">
           <label class="form-check-label" for="exampleRadios1">
            <h5>F V V V V (V)</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q9" id="exampleRadios2" value="0">
           <label class="form-check-label" for="exampleRadios2">
             <h5>V F F V V</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q9" id="exampleRadios1" value="0">
             <label class="form-check-label" for="exampleRadios1">
              <h5>V V V V V</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q9" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>F V F V F</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q9" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
              <h5>F V V V F</h5>
               </label>
             </div>
         </blockquote>
       </div>
     </div>
   </div>


   <!-- Questão 10 -->
<div class="container">
    <div class="card questoes">
       <div class="card-header class<?php echo Verificacao::$q10;?>
">
         <h3>Questão 10</h3>
       </div>
       <div class="card-body">
         <blockquote class="blockquote mb-0">
           <h4>Observe a fórmula do Isobutano:</h4>
           <center>
               <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/molecula2.jpg">
           </center>
           <h4>As quantidades totais de átomos de carbono primário, secundário e terciário são respectivamente:</h4>
           <div class="form-check">
           <input class="form-check-input" type="radio" name="q10" id="exampleRadios1" value="0">
           <label class="form-check-label" for="exampleRadios1">
            <h5>3, 1 e 1</h5>
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="q10" id="exampleRadios2" value="1">
           <label class="form-check-label" for="exampleRadios2">
             <h5>3, 0 e 1 (V)</h5>
           </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="q10" id="exampleRadios1" value="0">
             <label class="form-check-label" for="exampleRadios1">
              <h5>2, 0 e 1</h5>
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="q10" id="exampleRadios2" value="0">
             <label class="form-check-label" for="exampleRadios2">
              <h5>3, 1 e 0</h5>
             </label>
           </div>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="q10" id="exampleRadios2" value="0">
               <label class="form-check-label" for="exampleRadios2">
              <h5>3, 1 e 2</h5>
               </label>
             </div>
           </blockquote>
         </div>
       </div>
       <div class="" style="display: <?php echo Verificacao::$bVisibilidade;?>
">
       <button class="btn btn-outline-info" type="submit" name="button" style="align-self: center; margin-top:0.7%;"><span class="icon-check"></span> ENVIAR</button>
       </div>
     </div>

     </form>




              <!-- Social -->
              <div class="social_container">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
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
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
  </html>
<?php }
}
