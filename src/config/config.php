<?php
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_TIME, 'pt-BR', 'pt-BR.utf-8', 'portuguese');

// caminhos ds pastas

define ('MODEL_PATH', realpath(dirname(__FILE__).'\\..\\models'));
define ('VIEW_PATH', realpath(dirname(__FILE__).'\\..\\views'));
define ('TEMPLATE_PATH', realpath(dirname(__FILE__).'\\..\\views\\template'));
define ('CONTROLLER_PATH', realpath(dirname(__FILE__).'\\..\\controllers'));
define ('EXCEPTION_PATH', realpath(dirname(__FILE__).'\\..\\exceptions'));

//caminhos dos arquivos
require_once(realpath(dirname(__FILE__).'\\database.php'));
require_once(realpath(dirname(__FILE__).'\\loader.php'));
require_once(realpath(MODEL_PATH . '\\Model.php'));
require_once(realpath(EXCEPTION_PATH . '\\AppException.php'));
require_once(realpath(EXCEPTION_PATH . '\\ValidationException.php'));