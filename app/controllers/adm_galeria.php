<?php

use App\Model\db;
use App\Model\where;
use App\lib\pagina;

class adm_galeria extends pagina
{
    
    public static function galeria($md)
    {
        $id = $md["modelo"];
        if (isset($_POST["capa"])) {
            db::validar_post();
            db::query("UPDATE galeria SET capa = 0 where idmodelo = '$id'");
            db::Acoluna("galeria", where::id($_POST["capa"]), "capa", 1);
        }
        if (isset($_POST["btn_add"])) {
            db::validar_post();
            db::remove("btn_add");
            db::Registrar("galeria");
            header("Location: /admin/editar/galeria/modelo/$id");
        }
        if (isset($_POST["capan"])) {
            db::validar_post();
            db::query("UPDATE galeria SET capa = 0 where idmodelo = '$id'");
        }
        if (isset($_POST["capae"])) {
            db::validar_post();
            db::Deletar("galeria", where::id($_POST["capae"]));
        }
        $query = "SELECT *FROM galeria where idmodelo = '$id' order by emite desc";
        if (isset($_POST["capam"])) {
            db::validar_post();
            $query = "SELECT *FROM galeria where idmodelo = '$id' and capa = 1 order by capa desc";
        }
        $page = 1;
        // 
        if (isset($_POST["page"]) && is_numeric(($_POST["page"]))) {
            db::validar_post();
            $page = $_POST["page"];
        }
        $sq =  db::Spagina($query, 12, $page);
        $nome = db::Scoluna("SELECT nome from modelo where id = '$id'","nome");
        $dados = [
            "sq" => $sq,
            "nome"=>$nome,
            "idmodelo" => $id
        ];
        self::titulo("Adicionar Fotos");
        self::header("navbar3");
        self::conteudo("galeria/galeria");
        self::footer("");
        self::LoadLayout("admin", $dados);
    }
    
}
