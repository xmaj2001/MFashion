<?php

use App\Model\db;
use App\Model\where;
use App\lib\pagina;
use App\lib\session;

class inscrever extends pagina
{

    public static function ver($md)
    {
        $id = $md["inscrito"];
        db::validar_campo($id);
        if (isset($_POST["btn_del"])) {
            db::validar_post();
            $insc = db::Slinha("SELECT * from inscrito where id = '$id'");
            $rosto = "assets/uploads/" . $insc["rosto"];
            $corpo = "assets/uploads/" . $insc["corpo"];
            unlink($rosto);
            unlink($corpo);
            header("Location: /admin/inscritos");
            db::Deletar("inscrito", where::id($id));
        }

        $md = db::Slinha("SELECT * from inscrito where id = '$id'");
        if (!isset($md)) {
            header("Location: /admin/inscritos");
        }

        self::titulo($md["nome"]);
        self::header("navbar3");
        self::conteudo("inscritos/inscrito");
        self::LoadLayout("admin", $md);
    }
    public static function inscrever_se()
    {
        $dados = ["feito" => false];
        if (count($_FILES) > 0 && isset($_POST["btn_xadd"])) {
            $pasta = new \Upload\Storage\FileSystem("assets/uploads");

            $rosto = new \Upload\File("rosto", $pasta);
            $corpo = new \Upload\File("corpo", $pasta);

            $rosto->setName(uniqid());
            $corpo->setName(uniqid());
            $erros = array();
            $tipos = array("png", "jpg", "jpeg");

            if (!in_array($rosto->getExtension(), $tipos)) {
                array_push($erros, "<small>O arquivo para foto do rosta tem que ter uma destas extensões .png | .jpg | .jpeg e com tamanho inferior a 10MB </small><br>");
            }
            if (!in_array($corpo->getExtension(), $tipos)) {
                array_push($erros, "<small>O arquivo para foto do corpo tem que ter uma destas extensões .png | .jpg | .jpeg e com tamanho inferior a 10MB </small>");
            }

            if (count($erros) <= 0) {
                try {
                    $_POST["rosto"] = $rosto->getNameWithExtension();
                    $_POST["corpo"] = $corpo->getNameWithExtension();
                    $rosto->upload();
                    $corpo->upload();
                    if (isset($_POST["btn_xadd"])) {
                        db::remove("btn_xadd");
                        $nome = $_POST["nome"];
                        $email = $_POST["email"];
                        $coun =  db::Numlinhas("SELECT email from inscrito where email = '$email'");
                        if ($coun == 0) {
                            db::Registrar("inscrito");
                            $dados["ms"]["titulo"] = "Ok <small>$nome</small>";
                            $dados["ms"]["tipo"] = "alert alert-success";
                            $dados["ms"]["mens"] = array("A Inscrição foi feita com sucesso");
                        } else {

                            $dados["ms"]["titulo"] = "<small>$nome</small>";
                            $dados["ms"]["tipo"] = "alert alert-warning";
                            $dados["ms"]["mens"] = array("JJá existe um inscrito no site com este email: <b>$email</b>");
                        }
                    }
                } catch (\Throwable $th) {
                    $dados["ms"]["titulo"] = "Arquivo inválido";
                    $dados["ms"]["tipo"] = "alert alert-danger";
                    array_push($erros, $th->getMessage());
                    $dados["ms"]["mens"] = $erros;
                    die("<small>" . $th->getMessage() . "</small>");
                }
            } else {
                $dados["ms"]["titulo"] = "Arquivo inválido";
                $dados["ms"]["tipo"] = "alert alert-danger";
                $dados["ms"]["mens"] = $erros;
            }
        }
        self::titulo("Inscrever-se");
        self::header("navbar");
        self::conteudo("client/inscrever");
        self::LoadLayout("layout", $dados);
    }

    public static function inscritos()
    {
        if (self::is_ajax()) {
            $page = 1;
            $valor = null;
            // 
            $query = "SELECT * from inscrito order by emite desc";
            if (isset($_POST["valor"])) {
                db::validar_post();
                $valor = $_POST["valor"];
                $query = "SELECT *FROM inscrito where (nome like '%$valor%' or email like '%$valor%' or genero like '%$valor%' or nacionalidade like '%$valor%') order by emite desc";
            }
            if (isset($_POST["page"]) && is_numeric(($_POST["page"]))) {
                db::validar_post();
                $page = $_POST["page"];
            }
            $sq =  db::Spagina($query, 12, $page);
            if ($sq != null) {
                self::loadinscrito($sq);
            }
        } else {
            $dados = ["total" => db::Numlinhas("SELECT *FROM inscrito")];
            self::titulo("Lista de inscritos");
            self::header("navbar3");
            self::conteudo("inscritos/inscritos");
            self::LoadLayout("admin", $dados);
        }
    }
    private static function loadinscrito($sq)
    {
        extract($sq);
        foreach ($itens as $key => $value) {
            extract($value);
            require 'inscrever/ajax.php';
        }
        require 'lib/pagina.php';
    }
}
