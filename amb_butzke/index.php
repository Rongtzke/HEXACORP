Bem Vindo Butzke


<?php
$banco = new PDO("mysql:host=localhost;dbname=id479187_hexacorp", "id479187_brunobutzke", "hexacorp");  

if($banco){
	echo "ENTROU";
}else{
	echo "E MORREU";
	
}
$sql="SELECT * FROM usuarios";
$data = $banco->query($sql);
 
    foreach($data as $row) {
        print_r($row); 
    }


?>