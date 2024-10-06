<?php
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password_db, $dbname);

// Comprobar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

function getUser($user){
    echo "Usuario a buscar $user";
}

function getAllUsers($con){
    $query = "SELECT * FROM vwallusersdata"; //String de consulta a BD
    $result = $con->query($query); 
    
    if ($result->num_rows > 0) {
        // Recorre cada fila del resultado y añádela al array $rows
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    
    return $rows;
}

function getAllTypes($con){
    $query = "SELECT * FROM catusertypes";
    $result = $con->query($query);
       $rows = array();//Array que almacena los registros

       // Verifica si la consulta devuelve resultados
       if ($result->num_rows > 0) {
           // Recorre cada fila del resultado y añádela al array $rows
           while($row = $result->fetch_assoc()) {
               $rows[] = $row;
           }
       }
       
       return $rows;
}
?>
