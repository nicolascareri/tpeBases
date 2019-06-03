<?php

  class Model
    {

      protected $db;

      function __construct()
        {
          $this->db = new PDO('pgsql:host=dbases.exa.unicen.edu.ar; port=5432;dbname=cursada; user=unc_249193; password=Domingo1');
        }

    }
?>
