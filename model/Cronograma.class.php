<?php
class Cronograma extends Connect{


    function __construct(){

      parent::__construct();

    }

    function get_Crono(){

      $scheduler = mysqli_connect(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_DATABASE);

      $dia = null;
      $materia = null;
      $evento = null;
      $status = null;
      $mes = null;

      if (isset($_POST['materia'])) {
        $materia = $_POST['materia'];
      }
      if (isset($_POST['evento'])) {
        $evento = $_POST['evento'];
      }
        if (isset($_POST['dia'])) {
          $dia = $_POST['dia'];
        }
        if (isset($_POST['mes'])) {
          $mes = $_POST['mes'];
        }

      if(isset($dia)){
        $sql = mysqli_query($scheduler,"SELECT age_letivo FROM tb_agenda WHERE age_dia = '$dia' AND age_mes_mes = '$mes'");
        while($dados = mysqli_fetch_array($sql)){
           $status = $dados['age_letivo'];
          }
        }

      if($status == "1"){

        $sql = mysqli_query($scheduler, "UPDATE `tb_agenda`
        SET `age_info`='".$evento."', `age_materia`='".$materia."', `age_letivo` = '0'
        WHERE `age_dia` = $dia AND `age_mes_mes` = $mes");
        mysqli_query($scheduler,$sql);

      }else{

      }
    }

  }
  ?>
