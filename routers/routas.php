<?php
//[a-zA-Z^]+  [a-z-^0-9]+
use App\core\routas;
use App\lib\session;

routas::Inicializar();
if (session::existe("cxmaj")) {
    // Admin Controller
    routas::add("/admin", "adm", "home");
    routas::add("/conta", "adm", "conta");
    routas::add("/admin/contactos", "contacto", "editar");
    routas::add("/admin/sobre", "adm", "sobre");
    // Modelo
    routas::add("/admin/modelos", "adm_modelo", "modelos");
    routas::add("/admin/novo/modelo", "adm_modelo", "novo");
    routas::addParametra("/admin/editar/modelo", "adm_modelo", "editar", routa_numerica);
    // Inscrito
    routas::add("/admin/inscritos", "inscrever", "inscritos");
    routas::addParametra("/admin/inscrito", "inscrever", "ver", routa_numerica);
    // Admin Galeria
    routas::addParametra("/admin/editar/galeria/modelo", "adm_galeria", "galeria", routa_numerica);
    routas::add("/sair", "home", "sair");
} else {
    routas::add("/login", "home", "login");
}
routas::add("/", "home", "index");
routas::add("/sobre/agencia", "home", "agencia");
routas::add("/contactos", "contacto", "index");
// Modelos
routas::add("/modelos", "modelos", "index");
routas::add("/getmodelo", "modelos", "getmodelo");
routas::addParametra("/modelo", "modelos", "modelo", routa_numerica);
routas::addParametra("/modelos", "modelos", "index", routa_strings);
// -----------------------------------------------------------------

// inscrever
routas::add(["/inscrever-se", "/Inscrever-se"], "inscrever", "inscrever_se");
// ---------------------------------------------------------------------
// Ajax
routas::add("/ajaxmodelos", "adm_modelo", "amodelos");
routas::add("/ajaxgaleria", "modelos", "galeria");



// Retornado todas as rotas
return routas::getroutas();
