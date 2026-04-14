<?php

    $smarty = new Template();
    $agenda = new Agenda();
    $info1 = new Agenda();
    $info2 = new Agenda();
    $semana = new Agenda();
    $meses = new Agenda();
    $info = new Pessoa();
    $professor = new Pessoa();
    $agenda-> get_Agenda();
    $info->get_Info();
    $info1->get_Inserir();
    $info2->get_Meses();
    $semana->get_Semanas();
    $meses->get_Mes();
    $professor->get_Professor();

    // Configuração do tema do site
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());

    // Configuração das rotas de Página
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_SOBRE', Rotas::get_SiteSobre());
    $smarty->assign('GET_GALERIA', Rotas::get_SiteGaleria());
    $smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
    $smarty->assign('GET_CADASTRO', Rotas::get_Cadastro());
    $smarty->assign('GET_LOGOUT', Pessoa::get_Logout());
    $smarty->assign('GET_VERIFICACAO', Pessoa::Login_G());
    $smarty->assign('SCHEDULER', Agenda::get_Scheduler());

    // informações do banco de dados na página
    $smarty->assign('PES', $info->get_Itens());
    $smarty->assign('INF', $info1->get_Itens());
    $smarty->assign('MES', $info2->get_Itens());
    $smarty->assign('AGE', $agenda->get_Itens());
    $smarty->assign('SEM', $semana->get_Itens());
    $smarty->assign('MON', $meses->get_Itens());
    $smarty->assign('PRO', $professor->get_Itens());

      $smarty->display('gerente.html');
 ?>
