<?php

    $smarty = new Template();

    // Configuração do tema do site
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());

    // Configuração das rotas de Página
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_SOBRE', Rotas::get_SiteSobre());
    $smarty->assign('GET_GALERIA', Rotas::get_SiteGaleria());
    $smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
    $smarty->assign('GET_ALUNO', Rotas::get_SiteAluno());
    $smarty->assign('GET_PROFESSOR', Rotas::get_SiteProfessor());
    $smarty->assign('GET_LOGIN', Pessoa::get_Login());
    $smarty->assign('GET_CONTATO', Contato::get_Contato());

      $smarty->display('contato.html');

 ?>
