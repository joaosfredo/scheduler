<?php

  class Rotas{

      public static $pag;
      public static $data;
      private static $pasta_estoria = 'estoria';
      private static $pasta_cadastro ='cadastro';
      private static $pasta_views = 'views';
      private static $pasta_sobre = 'sobre';
      private static $pasta_contato = 'contato';
      private static $pasta_galeria = 'galeria';
      private static $pasta_aluno = 'portalAluno';
      private static $pasta_professor = 'portalProfessor';
      private static $pasta_gerente = 'portalGerente';
      private static $pasta_matematica = 'matematica';
      private static $pasta_ingles = 'ingles';
      private static $pasta_portugues = 'portugues';
      private static $pasta_geografia = 'geografia';
      private static $pasta_historia = 'historia';
      private static $pasta_fisica = 'fisica';
      private static $pasta_quimica = 'quimica';
      private static $pasta_biologia = 'biologia';
      private static $pasta_literatura = 'literatura';

      // Configuração da rota para página home
    static function get_SiteHome(){
        return Config::SITE_URL.'/'.Config::SITE_PASTA;
    }

    static function get_SiteTema(){
        return self::get_SiteHome().'/'.self::$pasta_views;
    }

    // Configuração da raiz do site
    static function get_SiteRaiz(){
      return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
    }

    // Configuração da página sobre
    static function get_SiteSobre(){
      return self::get_SiteHome().'/'.self::$pasta_sobre;
  }

    //Carregar a página contato
    static function get_SiteContato(){
      return self::get_SiteHome().'/'.self::$pasta_contato;
  }

      //Carregar a página galeria
      static function get_SiteGaleria(){
        return self::get_SiteHome().'/'.self::$pasta_galeria;
    }

    //Carregar a página aluno
    static function get_SiteAluno(){
      return self::get_SiteHome().'/'.self::$pasta_aluno;
  }

  //Carregar a página professor
  static function get_SiteProfessor(){
    return self::get_SiteHome().'/'.self::$pasta_professor;
}

  //Carregar a página professor
  static function get_SiteGerente(){
  return self::get_SiteHome().'/'.self::$pasta_gerente;
}

//Carregar a página historia
   static function get_SiteHistoria(){
     return self::get_SiteHome().'/'.self::$pasta_estoria;
 }

  //Carregar a página matematica
  static function get_Matematica(){
    return self::get_SiteHome().'/'.self::$pasta_matematica;
  }

  //Carregar a página ingles
  static function get_Ingles(){
    return self::get_SiteHome().'/'.self::$pasta_ingles;
  }

  //Carregar a página portugues
  static function get_Portugues(){
  return self::get_SiteHome().'/'.self::$pasta_portugues;
  }

  //Carregar a página geografia
  static function get_Geografia(){
  return self::get_SiteHome().'/'.self::$pasta_geografia;
  }

  //Carregar a página historia
  static function get_Historia(){
    return self::get_SiteHome().'/'.self::$pasta_historia;
    }

  //Carregar a página fisica
  static function get_Fisica(){
    return self::get_SiteHome().'/'.self::$pasta_fisica;
    }

  //Carregar a página quimica
  static function get_Quimica(){
    return self::get_SiteHome().'/'.self::$pasta_quimica;
    }

  //Carregar a página biologia
  static function get_Biologia(){
    return self::get_SiteHome().'/'.self::$pasta_biologia;
    }

  //Carregar a página literatura
  static function get_Literatura(){
    return self::get_SiteHome().'/'.self::$pasta_literatura;
    }


//Carregar a página cadastro
static function get_Cadastro(){
return self::get_SiteHome().'/'.self::$pasta_cadastro;
}

static function get_Data(){
  self::$data = date('m');
}

    static function get_Pagina(){

      if(isset($_GET['pag'])){
          $pagina = $_GET['pag'];
          self::$pag = explode('/',$pagina);
              $pagina = 'controller/'.self::$pag[0].'.php';
              if (file_exists($pagina)) {
                include_once $pagina;
              }else{
                include_once 'erro.php';
              }
      }

    }

}

 ?>
