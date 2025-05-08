<?php

use App\Model\db;
use App\Model\where;
use App\lib\pagina;
use App\lib\session;
use App\lib\valida;
use Respect\Validation\Validator;

class adm extends pagina
{
    public static function home()
    {
        self::titulo("Admin");
        self::conteudo("admin/home");
        self::LoadLayout("adminh");
    }
    public static function conta()
    {
        $erro1 = array();
        $erro = null;
        if (isset($_POST["btn_sv"])) {
            db::validar_post();
            $us = session::get("cxmaj");
            $_POST["nome"] = $_POST["cp1"];
            $_POST["email"] = $_POST["cp2"];
            if (valida::char_in($_POST["nome"])) {
                array_push($erro1, "Não é permitido caracter especias / ? = _ - : ^ ~ &");
            } else if (!Validator::noWhitespace()->validate($_POST["nome"])) {
                array_push($erro1, "Não é permitido espaço no campo nome");
            }
            if (!Validator::notEmpty()->validate($_POST["cp4"])) {
                unset($_POST["cp3"]);
                unset($_POST["cp4"]);
            } else {
                if ($us["senha"] == $_POST["cp3"]) {
                    $_POST["senha"] = md5( $_POST["cp4"]."__-xmaj-hunterkeymura_alienbeat");
                    unset($_POST["cp3"]);
                    unset($_POST["cp4"]);
                } else {
                    $erro = "A senha atual digitada não esta certo";
                }
            }
            unset($_POST["cp1"]);
            unset($_POST["cp2"]);
            if (count($erro1) == 0) {
                db::Atualiza("cadmin", where::id($us["id"]));
            }
        }
        $conta = db::Slinha("SELECT * FROM cadmin");
        session::set("cxmaj",$conta);
        $dados = [
            "conta" => $conta,
            "erro" => $erro,
            "enome" => $erro1
        ];
        self::titulo("Conta Admin");
        self::header("navbar3");
        self::conteudo("admin/conta");
        self::LoadLayout("admin", $dados);
    }
    public static function sobre()
    {
        if (isset($_POST["btn_sv"])) {
            db::validar_post();
            db::Atualiza("sobre", where::id(1));
        }
        $sobre = db::Slinha("SELECT * from sobre limit 1");
        self::titulo("Admin");
        self::header("navbar3");
        self::conteudo("sobre");
        self::LoadLayout("admin", $sobre);
    }
}
