<?php

    $smarty = new Template();
    $agenda = new Agenda();
    $agenda->get_Agenda();
    $info = new Pessoa();
    $info->get_Info();

    // Configuração do tema do site
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());

    // Configuração das rotas de Página
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_SOBRE', Rotas::get_SiteSobre());
    $smarty->assign('GET_GALERIA', Rotas::get_SiteGaleria());
    $smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
    $smarty->assign('GET_CADASTRO', Rotas::get_Cadastro());
    $smarty->assign('GET_LOGOUT', $info->get_Logout());
    $smarty->assign('GET_ALUNO', Rotas::get_SiteAluno());
    $smarty->assign('SOMA', Verificacao::soma());
    $smarty->assign('REFAZER', Verificacao::refazer());

    // informações do banco de dados na página
    $smarty->assign('PES', $info->get_Itens());
    $smarty->assign('AGE', $agenda->get_Itens());

    $smarty->display('historia.html');
?>