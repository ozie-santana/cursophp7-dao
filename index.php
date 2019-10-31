<?php

require_once("config.php");


//###Garrega um única usuário
/*$root = new Usuario();
$root->loadbyId(5);
echo $root;
*/

//###Garrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//####Garrega usuário pelo login digitado
//$search = Usuario::search("Oz");
//echo json_encode($search);


//Garrega usuário usando login e senha 
$usuario = new Usuario();
$usuario->login("santana", "123");

echo $usuario

?>