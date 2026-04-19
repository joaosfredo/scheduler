<?php

$smarty = new Template();
$agenda = new Agenda();
$info1 = new Agenda();
$info2 = new Agenda();
$semanaAgenda = new Agenda();
$meses = new Agenda();
$info = new Pessoa();

$agenda->get_Agenda();
$info->get_Info();
$info1->get_Inserir();
$info2->get_Meses();
$semanaAgenda->get_Semanas();
$meses->get_Mes();

// Configuração do tema do site
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());

// Configuração das rotas de Página
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->assign('GET_SOBRE', Rotas::get_SiteSobre());
$smarty->assign('GET_GALERIA', Rotas::get_SiteGaleria());
$smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
$smarty->assign('GET_LOGOUT', $info->get_Logout());
$smarty->assign('GET_VERIFICACAO', $info->Login_A());
$smarty->assign('GET_MATEMATICA', Rotas::get_Matematica());
$smarty->assign('GET_INGLES', Rotas::get_Ingles());
$smarty->assign('GET_PORTUGUES', Rotas::get_Portugues());
$smarty->assign('GET_GEOGRAFIA', Rotas::get_Geografia());
$smarty->assign('GET_HISTORIA', Rotas::get_Historia());
$smarty->assign('GET_FISICA', Rotas::get_Fisica());
$smarty->assign('GET_QUIMICA', Rotas::get_Quimica());
$smarty->assign('GET_BIOLOGIA', Rotas::get_Biologia());
$smarty->assign('GET_LITERATURA', Rotas::get_Literatura());

// Informações do banco de dados na página
$smarty->assign('PES', $info->get_Itens());
$smarty->assign('INF', $info1->get_Itens());
$smarty->assign('MES', $info2->get_Itens());
$smarty->assign('AGE', $agenda->get_Itens());
$smarty->assign('SEM', $semanaAgenda->get_Itens());
$smarty->assign('MON', $meses->get_Itens());

$semana = array(
    1  => "Domingo",
    2  => "Segunda",
    3  => "Terça",
    4  => "Quarta",
    5  => "Quinta",
    6  => "Sexta",
    7  => "Sábado",
    11 => "Pedro",
);

$smarty->display('aluno.html');
?>