<?php
namespace App\Model;
class conector
{
    // Criar conector
    public static function Get_Conector($servername = "sql211.epizy.com", $username = "epiz_33544525", $password = "UBEtCJ6BibB3", $dbname = "epiz_33544525_mfashion")
    {
        try {
            // $conn = new \mysqli($servername, $username, $password, $dbname);
            $conn = new \mysqli("localhost", "root","", "db_md");
            // Verificar connection
            if ($conn->connect_error) {
                echo("<h2>Falha ao conectar-se a Base de Dados:</h2> " . $conn->connect_error);
                die("<p>Se erro continuar entre em contacto com o administrador.</p></br>");
            } else {
                $conn->set_charset("utf8");
                return $conn;
            }
        } catch (\mysqli_sql_exception $th) {
            echo("Erro ao carregar a pagina por favor tenta novamente. Se erro continuar entre em contacto com o administrador.</br>");
            die("Falha ao conectar-se a Base de Dados: " . $th);
        }
    }
}
