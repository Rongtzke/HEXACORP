<?php

$banco = new PDO("mysql:host=localhost;dbname=id479187_hexacorp", "id479187_brunobutzke", "hexacorp");  

$login=$_POST["login"];
$senha=$_POST["senha"];

$sql="SELECT count(*) FROM usuarios WHERE login='$login'";
$data = $banco->query($sql);
  
 
    foreach($data as $row) {
        $teste[]=$row; 
    }
	
	if($login=="libardo"){
		header('location: loja_virtual/libardo.php');
	}
	if($teste[0][0]==1){
		header('location: menu.php');
	}else{
		echo "nao existe almoco gratis :)";
		die();
	}
	
?>