<?php
class database extends mysqli{
	public function __construct(){
		if($_SERVER['SERVER_ADDR'] == '189.38.90.52'){
			$host = "mysql.estillomoveis.com.br";
			$dbname = "estillomoveis";
			$usuario = "estillomoveis";
			$senha = "s06x6pj7wr";
		}else{
			$host = "localhost";
			$dbname = "estillomoveis";
			$usuario = "root";
			$senha = "mysql159753";
		}
		try {
			@$this->connect($host, $usuario, $senha, $dbname);
			if(mysqli_connect_errno() != 0) {
                throw new Exception(mysqli_connect_errno());
            } 
		}catch(Exception $erro){
			$mensagem = $erro->getMessage();
            $codigo   = $erro->getCode();
            $arquivo  = $erro->getFile();
            $trace    = $erro->getTraceAsString();
		}
	}
	public function __destruct(){
		$this->close();
	}
}
?>