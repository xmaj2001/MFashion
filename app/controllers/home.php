<?php

use App\Model\db;
use App\lib\pagina;
use App\lib\session;
use App\lib\valida;
use Respect\Validation\Validator;

class home extends pagina
{
    public static function index()
    {
        self::titulo("MFashion & Management");
        self::header("navbar");
        self::image("images/md1.jpg");
        self::description("A MFashion & Management é uma agência de moda, com modelos não-padrão, compostos por crianças, adolescentes e jovens, influenciadores, com atitudes, estilos e muita personalidade, com um sonho de ser um modelo e também a inclusão social.");
        self::conteudo("home");
        self::footer("footer");
        self::LoadLayout();
    }
    public static function agencia()
    {
        $dados = db::Slinha("SELECT * FROM contactos limit 1");
        self::titulo("Agência MFashion & Management");
        self::header("navbar");
        self::image("images/md1.jpg");
        self::description("A MFashion & Management é uma agência de moda, com modelos não-padrão, compostos por crianças, adolescentes e jovens, influenciadores, com atitudes, estilos e muita personalidade, com um sonho de ser um modelo e também a inclusão social.");
        self::conteudo("client/agencia");
        self::LoadLayout("layout",$dados);
    }
    public static function login()
    {
        $erros = null;
        if (isset($_POST["btn_login"])) {
            $erro1 = array();
            $erro2 = array();
            db::remove("btn_login");
            db::validar_post();
            $nome = $_POST["cp1"];
            $email = $_POST["cp2"];
            $senha = md5( $_POST["cp3"]."__-xmaj-hunterkeymura_alienbeat");

            if (valida::char_in($nome)) {
                array_push($erro1, "Não é permitido caracter especias / ? = _ - : ^ ~ &");
            } else if (!Validator::noWhitespace()->validate($nome)) {
                array_push($erro1, "Não é permitido espaço no campo nome");
            }
            if (!Validator::email()->validate($email)) {
                array_push($erro2, "O valor $email não é Email");
            }
            if (!Validator::noWhitespace()->validate($email)) {
                array_push($erro2, "Não é permitido espaço no campo Email");
            }
            if ($erro1 == array() && $erro2 == array()) {
                $us = db::Slinha("SELECT *FROM cadmin where nome = '$nome' and email = '$email' and senha ='$senha'");
                if (isset($us)) {
                    session::set("cxmaj", $us);
                    header("Location: /admin");
                } else {
                    $erros = [
                        "uss" => "Esta conta não foi Encontrada <small>Verifica se os dados adicionados estão corretos</smaall>"
                    ];
                }
            } else {
                $erros = [
                    "nome" => $erro1,
                    "email" => $erro2
                ];
            }
        }
        self::header("navbare");
        self::titulo("Login");
        self::conteudo("login");
        self::LoadLayout("login",$erros);
    }

    public static function sair()
    {
        session::limpar();
        header("Location: /");
    }
}
