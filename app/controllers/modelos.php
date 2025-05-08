<?php

use App\Model\db;
use App\Model\where;
use App\lib\pagina;
use App\lib\valida;

class modelos extends pagina
{
    public static function index($tipo_page = null)
    {
        $pagina = 1;
        $por_page = 24;
        if (isset($_POST["page"])) {
            db::validar_post();
            $pg = valida::char_not($_POST["page"]);
            if (is_numeric($pg)) {
                $pagina = $pg;
            }
        }

        if (isset($tipo_page["modelos"])) {
            $tipo_page = $tipo_page["modelos"];
        }

        $query = "SELECT * from modelo order by emite desc";
        if ($tipo_page != null) {
            $query = "SELECT * from modelo where genero = '$tipo_page' order by emite desc";
        }
        $db_modelos = db::Spagina($query, $por_page, $pagina);
        $rede = db::Slinha("SELECT * FROM contactos limit 1");
        $dados = [
            "modelos" => $db_modelos,
            "paginas" => $db_modelos["paginas"],
            "page" => $pagina,
            "prox" => $db_modelos["prox"],
            "ant" => $db_modelos["ant"],
            "rede" => $rede,
            "tipo_page" => $tipo_page
        ];
        self::titulo("Modelos");
        self::header("navbar");
        self::conteudo("client/home");
        self::LoadLayout("layout",$dados);
    }
    public static function modelo($id)
    {
        if ($id["modelo"] == 0) {
            header("Location: /modelos");
        }
        $modelo = $id["modelo"];
        $modelo = $id["modelo"];
        $editar = false;
        if (isset($_POST["btn_sv"])) {
            db::validar_post();
            db::Atualiza("modelo", where::id($modelo));
        }
        if (isset($_POST["edit"])) {
            $editar = true;
        }
        $modelo = db::validar_campo($modelo);
        $md = db::Slinha("SELECT * from modelo where id = '$modelo'");
        if (!isset($md)) {
            header("Location: /modelos");
        }
        $capa = null;
        $viewcapa = db::SELECIONA("SELECT foto from galeria where idmodelo ='$modelo' and capa = 1 limit 2");
        if (count($viewcapa) > 0) {
            $capa = db::Scoluna("SELECT foto from galeria where idmodelo ='$modelo' and capa = 1", "foto");
            $view = db::SELECIONA("SELECT foto from galeria where idmodelo ='$modelo' and capa = 0 order by emite desc limit 4");
        } else {
            $view = db::SELECIONA("SELECT foto from galeria where idmodelo ='$modelo' order by emite desc limit 5");
        }
        $totalf = db::Numlinhas("SELECT foto from galeria where idmodelo ='$modelo'");
        $qfotos = 10;
        $nump = ceil($totalf / $qfotos);
        $dados = [
            "modelo" => $md,
            "capa" => $capa,
            "mdview" => $view,
            "cg" => $nump,
            "editar" => $editar
        ];
        $foto = $capa;
        if ($foto == null && count($view) > 0) {
            $foto = $view[0]["foto"];
        }
        self::titulo($md["nome"]);
        self::description("");
        self::image($capa);
        self::header("navbar");
        self::conteudo("client/modelo");
        self::footer("footer");
        self::LoadLayout("layout", $dados);
    }
    public static function md($tipo)
    {
        self::titulo("Modelos " . $tipo["modelos"]);
        self::header("navbar");
        self::conteudo("client/home");
        self::footer("footer");
        self::LoadLayout("layout", $tipo);
    }

    public static function galeria()
    {
        if (self::is_ajax() && isset($_POST["modelo"]) && is_numeric($_POST["modelo"])) {
            $page = 1;
            $modelo = $_POST["modelo"];
            $valor = null;
            // 
            $query = "SELECT foto from galeria where idmodelo = '$modelo' order by emite desc";
            if (isset($_POST["page"]) && is_numeric(($_POST["page"]))) {
                db::validar_post();
                $page = $_POST["page"];
            }
            $sq =  db::Spagina($query, 12, $page);
            if ($sq != null) {
                self::loadgaleria($sq);
            }
        }else {
            header("Location:/");
        }
        
    }
    private static function loadgaleria($sq)
    {
        extract($sq);
        foreach ($itens as $key => $value) {
            require "modelo/foto.php";
        }
        require 'lib/pagina2.php';
    }
}