<?php

namespace App\core;

class routas
{

    private static $lroutas = array();
    public static function Inicializar()
    {
        // Parametros Numericos
        define("routa_numerica", "[0-9]+");
        // String
        define("routa_strings", "[a-zA-Z]+");
        define("routa_texto", "[0-9a-zA-Z]+");
        define("routa_href", "[0-9a-zA-Z-_@]+");
    }
    public static function add($rota, $controller, $metodo)
    {
        if (is_array($rota)) {
            foreach ($rota as $key => $value) {
                self::$lroutas[$value] = $controller . "@" . $metodo;
            }
        } else {
            self::$lroutas[$rota] = $controller . "@" . $metodo;
        }
    }
    public static function addParametra($rota, $controller, $metodo, $regra = "")
    {
        if (is_array($rota)) {
            foreach ($rota as $key => $value) {
                self::$lroutas[$value . "/" . $regra] = $controller . "@" . $metodo;
            }
        } else {
            self::$lroutas[$rota . "/" . $regra] = $controller . "@" . $metodo;
        }
    }
    public static function getroutas()
    {
        return self::$lroutas;
    }
}
