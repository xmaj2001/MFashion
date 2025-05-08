<?php

namespace App\Model;

trait modelo_update
{
    // Model Atualizar --------------------
    public static function Atualiza($tabela, array $where, $colunas = null, $valores = null, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            $campos = "";
            if (!isset($colunas)) {
                if (isset($_POST)) {
                    db::remove("btn_add");
                    db::remove("btn_sv");
                    db::remove("btn_del");
                    $num = count($_POST);
                    $conte = 0;
                    foreach ($_POST as $key => $value) {
                        $conte++;
                        if ($conte >= $num) {
                            $campos .=  $key . " = " . "'$value'";
                            break;
                        }
                        $campos .=  $key . " = " . "'$value',";
                    }
                } else {
                    die("Não existe nenhum poste");
                }
            } else {
                if (!is_array($colunas)) {
                    echo ("<h4> A variável <b>colunas</b> precisa ser um array </h4>");
                    die("<pre>Onde tera as colunas que queres atualizar</pre>");
                }

                if (!is_array($valores)) {
                    echo ("<h4> A variável <b>Valores</b> precisa ser um array </h4>");
                    die("<pre>Onde tera os novos valores que queres adicionar</pre>");
                }
                $num = count($colunas);
                $conte = 0;
                foreach ($colunas as $key => $value) {
                    $conte++;
                    if ($conte >= $num) {
                        $campos .=  $colunas[$key] . " = " . "'$valores[$key]'";
                        break;
                    }
                    $campos .=  $colunas[$key] . " = " . "'$valores[$key]',";
                }
            }

            if ($db != null) {
                if (!is_array($where)) {
                    echo ("<h4> A variável <b>where</b> precisa ser um array </h4>");
                    die("<pre><b> where[0] = coluna && </b> where[1] = valor</b></p>");
                }
                $query = "UPDATE {$tabela} SET $campos where $where[0] $where[1] '$where[2]'";
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("<h4> Não possivel fazer update:</h4> <br> <pre>$th</pre>");
        }
    }
    public static function Acoluna($tabela, array $where, $coluna = null, $valor = null, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            if (!is_array($where)) {
                echo ("<h4> A variável <b>where</b> precisa ser um array </h4>");
                die("<pre>where[0] = <b> coluna && </b> where[1] = <b> Operador </b> where[2] = <b> valor </b></pre>");
            }
            $campo = "";
            if (!isset($coluna)) {
                if (isset($_POST)) {
                    db::remove("btn_add");
                    db::remove("btn_sv");
                    db::remove("btn_del");
                    $num = count($_POST);
                    foreach ($_POST as $key => $value) {
                        if ($num >= count($_POST)) {
                            break;
                        }
                        $num++;
                        $campo = $key;
                        $valor = $value;
                    }
                } else {
                    die("Não existe nenhum poste");
                }
            } else {
                $campo = $coluna;
            }
            if ($db != null) {
                $query = "UPDATE {$tabela} SET $campo = '$valor' where $where[0] $where[1] '$where[2]'";
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("Não foi possivel fazer atualizaçao do campo: {$campo}" . $th);
        }
    }
}
