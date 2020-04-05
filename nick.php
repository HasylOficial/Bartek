<?php
$nick = $_POST['nick'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "liczby";
$con = mysqli_connect($servername, $username, $password, $dbname);

if($con){

    $db = mysqli_select_db($con,$dbname);
                        
    if(!$db){
        
                        
        echo 'Could not connect to database'.mysqli_error($con);                   
        }}
        else{ 
        echo 'could not connect to server';
        }
        $sql = "ALTER TABLE `agenci` ADD `cos` INT( ".$nick .") NOT NULL;";
        if (mysqli_query($con, $sql)) {
            echo "Dobra luz dziala";
        } else {
            echo "Cos spierdoliles";
            echo "Error: " . $sql . "<br>" . $con->error;
        }          
$con->close();
?>