<?php

use App\Model\db;
use App\Model\where;
use App\lib\pagina;

class adm_modelo extends pagina
{

    public static function modelos()
    {
        self::titulo("Admin Modelos");
        self::header("navbar3");
        self::conteudo("modelo/modelos");
        self::LoadLayout("admin");
    }

    public static function novo()
    {

        if (isset($_POST["btn_add"])) {
            db::validar_post();
            db::Registrar("modelo");
            $nome = $_POST["nome"];
            $md = db::Slinha("SELECT * FROM modelo where nome = '$nome' order by emite desc");
            header("Location: /admin/editar/galeria/modelo/" . $md["id"]);
        }
        self::titulo("Adicionar Modelo");
        self::header("navbar3");
        self::conteudo("modelo/novo_modelo");
        self::footer("");
        self::LoadLayout("admin");
    }

    public static function editar($md)
    {
        $id = $md["modelo"];
        db::validar_post();
        if (isset($_POST["btn_del"])) {
            db::validar_post();
            db::Deletar("galeria", where::onde("idmodelo", "=", $id));
            db::Deletar("modelo", where::id($id));
            header("Location: /lista/modelos");
        }
        if (isset($_POST["btn_sv"])) {
            db::validar_post();
            db::Atualiza("modelo", where::id($id));
        }

        $md = db::Slinha("SELECT * from modelo where id = '$id'");
        if (!isset($md)) {
            header("Location: /admin/modelos");
        }
        self::titulo("Editar " . $md["nome"]);
        self::header("navbar3");
        self::conteudo("modelo/modelo");
        self::LoadLayout("admin", $md);
    }

    public static function amodelos()
    {
        if (self::is_ajax()) {
            $page = 1;
            $valor = null;
            // 
            $query = "SELECT * from modelo order by emite desc";
            if (isset($_POST["valor"])) {
                db::validar_post();
                $valor = $_POST["valor"];
                $query = "SELECT * from modelo where (nome like '%$valor%' or id like '%$valor%') order by emite desc";
            }
            if (isset($_POST["page"]) && is_numeric(($_POST["page"]))) {
                db::validar_post();
                $page = $_POST["page"];
            }
            $sq =  db::Spagina($query, 12, $page);
            if ($sq != null) {
                self::loadmodelo($sq);
            }
        } else {
            header("Location:/");
        }
    }
    private static function loadmodelo($sq)
    {
        extract($sq);
        foreach ($itens as $key => $value) {
            $capa = null;
            extract($value);
            $capa = db::Scoluna("SELECT foto from galeria where idmodelo ='$id' and capa = 1", "foto");
            if ($capa == null) {
                $capa = db::Scoluna("SELECT foto from galeria where idmodelo ='$id' order by emite desc limit 1", "foto");
            }
            require 'modelo/modelo.php';
        }

        require 'lib/pagina.php';
    }
}
