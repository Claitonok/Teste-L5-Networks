<?php

namespace app\model;
use mysqli;

    $db_host = 'localhost';
    $db_name = 'log';
    $db_user = 'root';
    $db_pass = '';


try {
  $conexao = new mysqli($db_host, $db_user, $db_pass, $db_name);
  // echo "Connected a $db_name em $db_host com success.";
} catch (\Throwable $e) {
    var_dump("Connection failed: \n" . $e->getMessage()."no arquivo: \n". $e->getFile() . "linha: \n". $e->getLine());
}

