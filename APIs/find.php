<?php 

require 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "GET"){
	if ($_GET['option'] == 'findUser') {
		$user = $_GET['findUser'];
		getUser($user);
	}
}else{
    echo "Método no permitido";

}
 ?>