<?php

namespace app\controller;

use Exception;
use app\controller\InterfaceFilms;

class Exib implements InterfaceFilms
{
    public function filme1()
    {
        try {

            // TEMOS 06 FILMES A SER EXIBIDOS NO FRONT END
            $url = "https://swapi-node.now.sh/api/films/1";

            $response = file_get_contents($url);

            $data = json_decode($response, true);

            $result1[] = [
                "Titulo" => $data["fields"]["title"],
                "created" => $data["fields"]["created"],
                "edited" => $data["fields"]["edited"],
                "release_date" => $data["fields"]["release_date"],
                "producer" => $data["fields"]["producer"],
                "director" => $data["fields"]["director"],
                "episode_id" => $data["fields"]["episode_id"]
            ];

            Exib::log();

            return $result1;
            // var_dump($result[0]['Titulo']);
        } catch (\Throwable $e) {
            throw new Exception("ERRO na linha\n{$e->getLine()}" . "\n no arquivo\n{$e->getFile()}");
        }
    }
    
    public function filme2()
    {
        try {

            $url = "https://swapi-node.now.sh/api/films/2";

            $response = file_get_contents($url);

            $data = json_decode($response, true);

            $result2[] = [
                "Titulo" => $data["fields"]["title"],
                "created" => $data["fields"]["created"],
                "edited" => $data["fields"]["edited"],
                "release_date" => $data["fields"]["release_date"],
                "producer" => $data["fields"]["producer"],
                "director" => $data["fields"]["director"],
                "episode_id" => $data["fields"]["episode_id"]
            ];


            return $result2;
            // var_dump($result[0]['Titulo']);
        } catch (\Throwable $e) {
            throw new Exception("ERRO na linha\n{$e->getLine()}" . "\n no arquivo\n{$e->getFile()}");
        }
    }
    public function filme3()
    {
        try {

            $url = "https://swapi-node.now.sh/api/films/3";

            $response = file_get_contents($url);

            $data = json_decode($response, true);

            $result3[] = [
                "Titulo" => $data["fields"]["title"],
                "created" => $data["fields"]["created"],
                "edited" => $data["fields"]["edited"],
                "release_date" => $data["fields"]["release_date"],
                "producer" => $data["fields"]["producer"],
                "director" => $data["fields"]["director"],
                "episode_id" => $data["fields"]["episode_id"]
            ];


            return $result3;
            // var_dump($result[0]['Titulo']);
        } catch (\Throwable $e) {
            throw new Exception("ERRO na linha\n{$e->getLine()}" . "\n no arquivo\n{$e->getFile()}");
        }
    }
    public function filme4()
    {
        try {

            $url = "https://swapi-node.now.sh/api/films/4";

            $response = file_get_contents($url);

            $data = json_decode($response, true);

            $result4[] = [
                "Titulo" => $data["fields"]["title"],
                "created" => $data["fields"]["created"],
                "edited" => $data["fields"]["edited"],
                "release_date" => $data["fields"]["release_date"],
                "producer" => $data["fields"]["producer"],
                "director" => $data["fields"]["director"],
                "episode_id" => $data["fields"]["episode_id"]
            ];

            return $result4;
            // var_dump($result[0]['Titulo']);
        } catch (\Throwable $e) {
            throw new Exception("ERRO na linha\n{$e->getLine()}" . "\n no arquivo\n{$e->getFile()}");
        }
    }
    public function filme5()
    {
        try {

            $url = "https://swapi-node.now.sh/api/films/5";

            $response = file_get_contents($url);

            $data = json_decode($response, true);

            $result5[] = [
                "Titulo" => $data["fields"]["title"],
                "created" => $data["fields"]["created"],
                "edited" => $data["fields"]["edited"],
                "release_date" => $data["fields"]["release_date"],
                "producer" => $data["fields"]["producer"],
                "director" => $data["fields"]["director"],
                "episode_id" => $data["fields"]["episode_id"]
            ];


            return $result5;
            // var_dump($result[0]['Titulo']);
        } catch (\Throwable $e) {
            throw new Exception("ERRO na linha\n{$e->getLine()}" . "\n no arquivo\n{$e->getFile()}");
        }
    }
    public function filme6()
    {
        try {

            $url = "https://swapi-node.now.sh/api/films/6";

            $response = file_get_contents($url);

            $data = json_decode($response, true);

            $result6[] = [
                "Titulo" => $data["fields"]["title"],
                "created" => $data["fields"]["created"],
                "edited" => $data["fields"]["edited"],
                "release_date" => $data["fields"]["release_date"],
                "producer" => $data["fields"]["producer"],
                "director" => $data["fields"]["director"],
                "episode_id" => $data["fields"]["episode_id"]
            ];

            return $result6;
            // var_dump($result[0]['Titulo']);
        } catch (\Throwable $e) {
            throw new Exception("ERRO na linha\n{$e->getLine()}" . "\n no arquivo\n{$e->getFile()}");
        }
    }

//A CADA REQUISIÇÃO NA API GUARDAR NO BANCO DE DADOS UM LOG COM O STATUS
    public static function log()
    {
        try {

            date_default_timezone_set('America/Sao_Paulo');
            $datetime = date("d-m-Y H:i:s");

            include_once '../model/ConexaoLog.php';

            $status = 'Realizou uma consulta';
            $create = "INSERT INTO `log`(`id`, `status`, `data_cadastro`) VALUES ('[value-1]','[$status]', '[$datetime]')";

            $log = mysqli_query($conexao, $create);

            // var_dump($log. "FEITO");
            return $log;
        } catch (\Throwable $e) {
            throw new Exception("ERRO na linha\n{$e->getLine()}" . "\n no arquivo\n{$e->getFile()}");
        }
    }
}
