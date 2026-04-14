<?php



class Agenda extends Connect{


    function __construct(){

      parent::__construct();

    }

    // função para conferir parâmetro da página
    private static function get_Pag(){
        if(isset($_GET['mes_id'])){
          $pag = $_GET['mes_id'];
        }else{
          $pag = Rotas::$data;
        }
        return $pag;
      }



      // get_Agenda
      function get_Agenda(){

        Rotas::get_Data();
        $query = "SELECT * FROM tb_agenda
        WHERE age_mes_mes =".self::get_Pag();
        $this->executeSQL($query);
        $this->get_Lista();
      }


      // método de listas
      private function get_Lista(){
        $i=1;
        while($lista = $this->listData()):
          $this->itens[$i] = array(
            'age_dia' => $lista['age_dia'],
            'age_dia_dia' => $lista['age_dia_dia'],
            'age_info' => $lista['age_info'],
            'age_materia' => $lista['age_materia'],
            'age_mes_mes' => $lista['age_mes_mes'],
            'age_letivo' => $lista['age_letivo']
          );
          $i++;
      endwhile;
        }

        function get_Inserir(){

          $query = "SELECT * FROM tb_agenda";
          $this->executeSQL($query);
          $this->get_Lista1();
        }

        private function get_Lista1(){
          $i=1;
          while($lista = $this->listData()):
            $this->itens[$i] = array(
              'age_dia' => $lista['age_dia'],
              'age_dia_dia' => $lista['age_dia_dia'],
              'age_info' => $lista['age_info'],
              'age_mes_mes' => $lista['age_mes_mes'],
              'age_letivo' => $lista['age_letivo'],
            );
            $i++;
          endwhile;
        }

        function get_Meses(){

          $query = "SELECT * FROM tb_mes";
          $this->executeSQL($query);
          $this->get_Lista2();
        }

        private function get_Lista2(){
          $i=1;
          while($lista = $this->listData()):
            $this->itens[$i] = array(
              'mes_id' => $lista['mes_id'],
              'mes_nome' => $lista['mes_nome'],
              'mes_abreviacao' => $lista['mes_abreviacao']
            );
            $i++;
          endwhile;
        }

        function get_Semanas(){

          $query = "SELECT * FROM tb_dia
          INNER JOIN tb_agenda ON tb_dia.dia_id=tb_agenda.age_dia_dia
          WHERE age_dia <= 7 AND age_mes_mes =".self::get_Pag();
          $this->executeSQL($query);
          $this->get_Lista3();
        }

        private function get_Lista3(){
          $i=1;
          while($lista = $this->listData()):
            $this->itens[$i] = array(
              'dia_nome' => $lista['dia_nome'],
              'dia_abreviacao' => $lista['dia_abreviacao']
            );
            $i++;
          endwhile;
        }

        function get_Mes(){

          $query = "SELECT * FROM tb_mes
          WHERE mes_id =".self::get_Pag();
          $this->executeSQL($query);
          $this->get_Lista4();
        }

        private function get_Lista4(){
          $i=1;
          while($lista = $this->listData()):
            $this->itens[$i] = array(
              'mes_nome' => $lista['mes_nome'],

            );
            $i++;
          endwhile;
        }

        function get_Scheduler(){

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

        function get_Delete(){

          $scheduler = mysqli_connect(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_DATABASE);

          $dia = null;
          $materia = null;
          $evento = null;
          $status = null;
          $mes = null;

          if (isset($_POST['dia'])) {
            $dia = $_POST['dia'];
          }
          if (isset($_POST['mes'])) {
            $mes = $_POST['mes'];
          }
          if (isset($_POST['materia'])) {
            $materia = $_POST['materia'];

          if (isset($_POST['evento'])) {
            $evento = $_POST['evento'];

          if(isset($dia)){
            $sql = mysqli_query($scheduler,"SELECT age_letivo FROM tb_agenda WHERE age_dia = '$dia' AND age_mes_mes = '$mes'");
            while($dados = mysqli_fetch_array($sql)){
               $status = $dados['age_letivo'];
              }
            }

          if($status == "1"){

            $sql = mysqli_query($scheduler, "UPDATE `tb_agenda`
            SET `age_info`='', `age_materia`='', `age_letivo` = '1'
            WHERE `age_dia` = $dia AND `age_mes_mes` = $mes");
            mysqli_query($scheduler,$sql);

          }else{
            // echo "Esse dia não está disponível";
          }
        }}}




        }

 ?>
