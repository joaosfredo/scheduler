<?php

  class Template extends Smarty{

      function __construct(){

        parent::__construct();

        $this->setTemplateDir('views/');
        $this->setCompileDir('views/compile');
        $this->setCacheDir('views/cache');

      }


  }



 ?>
