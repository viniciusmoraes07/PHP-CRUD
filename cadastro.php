
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('header.php')?>

    <br/> <br/> <br/>
    
    <div class = "container">

        <div class="panel">

            <?php include('process.php'); ?>

            <?php
                
                $a = "<tt>some</tt><b>html</b>";
                preg_match("/<\w?>(\w*?)<\/\w?>/",$a,$b);
                echo "<h5 style ='color:red'>esse é o $b[1] </h5>";
            ?>

            <?php 
                $mysqli = new mysqli('localhost','root','','crudphp');
                
                if(isset($_POST['busca'])){

                   $name = $_POST['name'];
                   $location = $_POST['location'];
                    
                   $result =  $mysqli->query("select * from data where name ='$name'");

                   if($row = $result->fetch_assoc()){

                    echo "<h5 style ='color:red'> Esse puto existe";

                   }else{
                    echo "<h5 style ='color:red'> Úsuario não existe </h5>";
                   }


                }
            ?>

            <form action="" method = 'POST'>

                
                <label style = 'color:white'>Nome:</label>
                <input style = 'width:87%' type = "text" name = 'name' placeholder = 'Nome'>
                <br/><br/>


                <label style = 'color:white'>Senha:</label>
                <input style = 'width:87%' type = "text" name = 'location' placeholder = 'Senha'>
                <br/><br/>

                <button style = 'width:100%' type = "submit" name = 'save'>Salvar</button>
                <br/><br/>
                <button style = 'width:100%' type = "submit" name = 'busca'>Buscar</button>
            </form>
        </div>
    </div>  
</body>
</html>