<?php
class produtos{
    var $id_produto, $id_categorias_produto, $produto, $imagem;

    function  __construct() {
    }
    function lista_categorias($id_categoria){
        $con = new database();
        $query = 'SELECT * FROM categorias_produtos WHERE id_categorias_produto != '.$id_categoria.' ORDER BY categoria';
        $categorias = $con->query($query);
        if($categorias && $categorias->num_rows > 0){
            while($categoria = $categorias->fetch_assoc()){
                $retorno[] = $categoria;
            }
            return $retorno;
        }
    }
    function categoria_randomica(){
        $con = new database();
        $query = 'SELECT * FROM categorias_produtos ORDER BY RAND()';
        $categoria = $con->query($query);
        if($categoria && $categoria->num_rows > 0){
            $categoria = $categoria->fetch_assoc();
            return $categoria;
        }
    }
    function categoria($id_categoria){
        $con = new database();
        $query = 'SELECT * FROM categorias_produtos WHERE id_categorias_produto = '.$id_categoria;
        $categoria = $con->query($query);
        if($categoria && $categoria->num_rows > 0){
            $categoria = $categoria->fetch_assoc();
            return $categoria;
        }
    }
    function lista_produtos($id_categoria){
        $con = new database();
        $query = 'SELECT * FROM produtos WHERE id_categorias_produto = '.$id_categoria.' ORDER BY id_produto';
        $produtos = $con->query($query);
        if($produtos && $produtos->num_rows > 0){
            while($produto = $produtos->fetch_assoc()){
                $retorno[] = $produto;
            }
            return $retorno;
        }
    }
    function  __destruct() {
    }
}
?>
