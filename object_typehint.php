<?php

function aplica_configuracao(object $configuracao) {
    date_default_timezone_set($configuracao->timezone);
    $_SESSION['language'] = $configuracao->language;

    print "Aplicou configuracoes: {$configuracao->timezone} e idioma {$configuracao->language}";
}

$config = new stdClass;

$config->timezone = "America/Belem";
$config->language = "pt_BR";

// aplica_configuracao($config);
aplica_configuracao( (object) parse_ini_file("config.ini"));