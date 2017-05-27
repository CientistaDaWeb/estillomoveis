<?php
require_once('../includes/config.php');

$categorias = produtos::lista_categorias(0);
$smarty->assign('categorias', $categorias);
$smarty->assign('class', 'barra_lateral');
$smarty->display('index.tpl'); 
?>