<?php

    class Connect extends Config{

      private $host, $user, $pass, $db;

      protected $obj, $itens = array(), $prefix;

      function __construct(){

          $this->host = self::DB_HOST;
          $this->user = self::DB_USER;
          $this->pass = self::DB_PASS;
          $this->db = self::DB_DATABASE;

          try {
            if ($this->to_Connect() == null) {
                $this->to_Connect();
            }
          }catch (Exception $e){
            exit($e->getMessage().'<h2>Erro de Conexão</h2>');
          }
      } //Fim do Construtor

        function to_Connect(){
          $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
          );

          // Variável de Conexão
          $link = new PDO(
            "mysql:host={$this->host};
            dbname={$this->db}",
            $this->user,
            $this->pass,
            $options);

            return $link;

        }

        // Executa a query
        function executeSQL($query, array $param = null){
            $this -> obj = $this->to_Connect()->prepare($query);
            return $this->obj->execute();
        }

        // Traz os resultados da consulta
        function listData(){
            return $this->obj->fetch(PDO::FETCH_ASSOC);
        }

        // Traz o número de itens
        function totalData(){
            return $this->obj->rowCount();
        }

        // Captura de Itens
        function get_Itens(){
            return $this->itens;
        }

    }

 ?>
