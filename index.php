<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel ="stylesheet" type="text/css" href = "css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dados com php</title>
    
</head>
<body>

    <?php include('header.php') ?>
    <br/>

    <div>
        <h1> Bem vindo ao site</h1>
    </div>
    <?php include ('process.php'); ?>

    <?php 

        $mysqli = new mysqli('localhost','root','','crudphp');
        $busca = $mysqli->query('select * from data');
        //pre_r($busca);
        while($row = $busca->fetch_assoc()){
            pre_r($row['id']);
        };
       

        function pre_r($array){
            echo '<pre>';
            print_r($array);
        }

    ?>

    <div>

        <form action="" method="POST">
            <label> Name: </label>
            <input type="text" name ='name'  placeholder = 'Enter your name'>
            <label> Location: </label>
            <input type="text" name ='location' placeholder = 'Enter your location'>  
            <button type="submit" name ='save'>Save </button>   
        </form>
    </div>
    <br/>
    <a href='https://outlook.live.com/mail/0/inbox'> Click me </a>
    
</body>
</html>