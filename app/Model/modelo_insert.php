<?php

namespace App\Model;

trait modelo_insert
{
    // Model Registrar
    public static function Registrar($tabela, $colunas = null, $valores = null, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            $campos = "";
            $vls = "";
            if (!isset($colunas)) {
                if (isset($_POST)) {
                    db::remove("btn_add");
                    db::remove("btn_sv");
                    db::remove("btn_del");
                    $num = count($_POST);
                    $conte = 0;
                    foreach ($_POST as $key => $value) {
                        $value = $_POST[$key];
                        $conte++;
                        if ($conte >= $num) {
                            $campos .=  $key;
                            $vls .= "'$value'";
                            break;
                        }
                        $campos .=  $key . ",";
                        $vls .= "'$value',";
                    }
                } else {
                    die("Não existe nenhum poste");
                }
            } else {
                if (!is_array($colunas)) {
                    echo ("<h4> A variável <b>colunas</b> precisa ser um array </h4>");
                    die("<pre>Onde tera as colunas que queres registrar</pre>");
                }

                if (!is_array($valores)) {
                    echo ("<h4> A variável <b>Valores</b> precisa ser um array </h4>");
                    die("<pre>Onde tera os valores que queres adicionar</pre>");
                }
                $num = count($colunas);
                $conte = 0;
                foreach ($colunas as $key => $value) {
                    $value = $valores[$key];
                    $conte++;
                    if ($conte >= $num) {
                        $campos .=  $colunas[$key];
                        $vls .=  "'$value'";
                        break;
                    }
                    $campos .=  $colunas[$key] . ",";
                    $vls .=  "'$value',";
                }
            }
            if ($db != null) {
                $query = "INSERT INTO {$tabela} ($campos) value ($vls)";
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("<h4> Não possivel criar um novo registro:</h4> <br> <pre>$th</pre>");
        }
    }

    public static function Rid($tabela, $colunas = null, $valores = null, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            $campos = "";
            $vls = "";
            if (!isset($colunas)) {
                if (isset($_POST)) {
                    db::remove("btn_add");
                    db::remove("btn_sv");
                    db::remove("btn_del");
                    $num = count($_POST);
                    $conte = 0;
                    foreach ($_POST as $key => $value) {
                        $value = $_POST[$key];
                        $conte++;
                        if ($conte >= $num) {
                            $campos .=  $key;
                            $vls .= "'$value'";
                            break;
                        }
                        $campos .=  $key . ",";
                        $vls .= "'$value',";
                    }
                } else {
                    die("Não existe nenhum poste");
                }
            } else {
                if (!is_array($colunas)) {
                    echo ("<h4> A variável <b>colunas</b> precisa ser um array </h4>");
                    die("<pre>Onde tera as colunas que queres registrar</pre>");
                }

                if (!is_array($valores)) {
                    echo ("<h4> A variável <b>Valores</b> precisa ser um array </h4>");
                    die("<pre>Onde tera os valores que queres adicionar</pre>");
                }
                $num = count($colunas);
                $conte = 0;
                foreach ($colunas as $key => $value) {
                    $value = $valores[$key];
                    $conte++;
                    if ($conte >= $num) {
                        $campos .=  $colunas[$key];
                        $vls .=  "'$value'";
                        break;
                    }
                    $campos .=  $colunas[$key] . ",";
                    $vls .=  "'$value',";
                }
            }
            if ($db != null) {
                $query = "INSERT INTO {$tabela} ($campos) value ($vls)";
                $resut = $db->query($query);
                if ($resut === true) {
                    return $db->insert_id;
                } else {
                    return 0;
                }
            }
        } catch (\Throwable $th) {
            die("<h4> Não possivel criar um novo registro:</h4> <br> <pre>$th</pre>");
        }
    }
}
