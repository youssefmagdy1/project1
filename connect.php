<?php 


function open_connection(){

    $serverName = "localhost";
    $userName ="youssef";
    $password ="9nyKOAPRoKWY3n8c";
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
