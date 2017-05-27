<?php
    require_once('../includes/config.php');

    $con  = new database();
    $query = 'SELECT * FROM estados ORDER BY estado';
    $estados = $con->query($query);
    if($estados && $estados->num_rows > 0){
        $estadus[""] = "Selecione";
        while($estado = $estados->fetch_assoc()){
            $estadus[$estado['uf']] = utf8_encode($estado['estado']);
        }
    }
    $smarty->assign('estados', $estadus);
    $smarty->display('faleconosco.tpl');
?>
