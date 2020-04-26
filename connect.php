<?php 


function open_connection(){

    $serverName = "localhost";
    $userName ="root";
    $password ="Srayekoppa2011&";
    $dpname="project1";
    // create connection 
    $conn = new mysqli($serverName ,$userName ,$password ,$dpname);
    //check connection 
   return $conn ;

}


function close_connection($conn){
    $conn->close();
}
?>