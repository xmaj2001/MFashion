<?php

use App\Model\db;
use App\Model\where;
use App\lib\pagina;

class contacto extends pagina
{
    public static function index()
    {
        $dados = db::Slinha("SELECT * FROM contactos limit 1");
        self::titulo("contactos");
        self::header("navbar");
        self::conteudo("client/contactos");
        self::LoadLayout("layout", $dados);
    }
    public static function editar()
    {
        if (isset($_POST["btn_sv"])) {
            db::validar_post();
            db::Atualiza("contactos", where::id(1));
        }
        $dados = db::Slinha("SELECT * FROM contactos limit 1");
        self::titulo("contactos");
        self::header("navbar");
        self::conteudo("admin/contactos");
        self::LoadLayout("layout", $dados);
    }
}
