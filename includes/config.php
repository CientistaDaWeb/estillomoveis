<?php
/*
header('location: http://www.ween.com.br/indisponivel');
exit();
 */
session_start();
setlocale (LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');
require_once('../smarty/Smarty.class.php');
require_once('../classes/database.class.php');
require_once('../classes/produtos.class.php');

$smarty = new smarty();