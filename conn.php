<?php
function sqlconn(){
    $serverName= "localhost";
    $usernamebd="root";
    $passworddb="";
    $database = "aprender";
    return new mysqli($serverName, $usernamebd, $passworddb, $database);
}

?>