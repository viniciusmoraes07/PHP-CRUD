<?php

    $error = "";
    $mysqli = new mysqli('localhost','root','','crudphp') or die(mysqli_error);
    
    if(isset($_POST['save'])){
        
        $name = $_POST['name'];
        $location = $_POST['location'];

        if(strlen($name) < 3){
            $error = "<h5 style ='color:red'> Nome muito pequeno </h2>";
            echo $error;

        }else{

            $error = "";
            $mysqli ->query("INSERT INTO data(name,location) VALUES('$name','$location')") or die($mysqli->error);
        }
    }
?>

