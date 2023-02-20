<?php

require_once("config.php"); 

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */


//$root = new Usuario();

//$root->loadById(6);

//echo $root; 



// carrega uma lista de ususarios 

//$lista = usuario::getList();
//echo json_encode($lista); 


// Carrega lista de usuarios procura pelo login 

//$search = usuario::search("jo"); 
//echo json_encode($search); 

// carrega um ususario usando o login e a senha 

$usuario = new usuario();
$usuario->login("jose","1234567890"); 
echo $usuario;


?>