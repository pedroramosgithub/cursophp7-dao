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

//$usuario = new usuario();
//$usuario->login("jose","1234567890"); 
//echo $usuario;

// ISERIR NOVO USUARIO 
//$aluno = new usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert(); 
//echo $aluno;

// ISERIR NOVO USUARIO com construtor 
//$aluno = new usuario("Frederico","44556677");
//$aluno->insert(); 
//echo $aluno;

// update 
$usuario = new usuario();
$usuario->loadById(7);
$usuario->update("profe","22334");
echo $usuario; 
// delete
//$usuario = new usuario();
//$usuario->loadById(3);
//$usuario->delete();
//echo $usuario; 
?>