<?php

    class Verificacao{

      public static $nota;
      public static $soma;
      public static $cor;
      public static $resultado;
      public static $aVisibilidade = "0";
      public static $rVisibilidade = "0";
      public static $bVisibilidade = "block";
      public static $q1;
      public static $q2;
      public static $q3;
      public static $q4;
      public static $q5;
      public static $q6;
      public static $q7;
      public static $q8;
      public static $q9;
      public static $q10;

        function soma(){

        if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3'])
        && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6'])
        && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9'])
        && isset($_POST['q10'])) {

          self::$aVisibilidade = "0";
          self::$rVisibilidade = "1";
          self::$bVisibilidade = "none";
          self::$q1 = $_POST['q1'];
          self::$q2 = $_POST['q2'];
          self::$q3 = $_POST['q3'];
          self::$q4 = $_POST['q4'];
          self::$q5 = $_POST['q5'];
          self::$q6 = $_POST['q6'];
          self::$q7 = $_POST['q7'];
          self::$q8 = $_POST['q8'];
          self::$q9 = $_POST['q9'];
          self::$q10 = $_POST['q10'];
          self::$soma =(self::$q1 + self::$q2 + self::$q3 +
          self::$q4 + self::$q5 + self::$q6 + self::$q7 +
          self::$q8 + self::$q9 + self::$q10);

          if(self::$soma*10 <= "30"){
            self::$cor = "danger";
            self::$resultado = "red";
          }else {
            if ("30" < self::$soma*10 && "60" > self::$soma*10){
            self::$cor = "warning";
            self::$resultado = "#FFD700";
          }else{
            self::$cor = "success";
            self::$resultado = "#00EE00";
          }
          }

        }else{
          self::$aVisibilidade = "1";
        }

        }

      function refazer(){

        if (isset($_POST['refazer'])) {
          self::$q1 = null;
          self::$q2 = null;
          self::$q3 = null;
          self::$q4 = null;
          self::$q5 = null;
          self::$q6 = null;
          self::$q7 = null;
          self::$q8 = null;
          self::$q9 = null;
          self::$q10 = null;
          self::$rVisibilidade = "0";
          self::$aVisibilidade = "0";
          self::$bVisibilidade = "block";
        }

      }
    }


?>
