<?php

define("DB_SEVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db_university");
define("DB_PORT", 8889);


$connessione = new mysqli(DB_SEVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if( $connessione && $connessione->connect_error) {
    echo "Error" . $connessione->connect_error;
    die();
}

$sql = "SELECT * FROM `students`";

if($result = $connessione->query($sql)){
    if($result->num_rows > 0){
        

    while($studenti = $result->fetch_assoc()){
        echo "<div>". $studenti['name'] . " " . $studenti['surname']. "</div>"; 
        
    }
    }
}

?>