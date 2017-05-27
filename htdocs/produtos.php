<?php
	require_once('../includes/config.php');

    $url = $_SERVER['REQUEST_URI'];
    $var = explode('/', $url);
    $id_categoria = $var[2];

    if(!$id_categoria){
        $cat = produtos::categoria_randomica();
    }else{
        $cat = produtos::categoria($id_categoria);
    }
    $categorias = produtos::lista_categorias($cat['id_categorias_produto']);
    $produtos = produtos::lista_produtos($cat['id_categorias_produto']);

    $smarty->assign('categorias', $categorias);
    $smarty->assign('cat', $cat);
    $smarty->assign('produtos', $produtos);
    $smarty->assign('class', 'barra_lateral');

    $smarty->display('produtos.tpl');
?>