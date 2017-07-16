<?php
$servername = "localhost";
$username = "root";
$password = "null";
$db = "sefarimlist";
try {
    
    $conn = new PDO("mysql:host=$servername;dbname=sefarim", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
  
        if(isset($_GET['name']) && !empty($_GET['name']) && !empty($_GET['price']) && is_numeric($_GET['price'])){
            $query="INSERT INTO sefarimlist (name,price) VALUES (:theName,:thePrice)";
            $statement = $conn->prepare($query);
            $statement->bindValue(":theName",$_GET['name']);
            $statement->bindValue(":thePrice",$_GET['price']);
            $statement->execute();
            $did = true;
        }
        else{
            $did = false;
            echo "something wasm't right";
        }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
         <div class="jumbotron">
            <h1 class="text-center">HW_63</h1>
            <h4 class="text-center">Adding Seforim</h4>
         </div>
            <form class="form-inline">
            <label class="sr-only" for="name">Sefer Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="name" name="name" placeholder="New Sefer Name:">

        <label class="sr-only" for="price">Price</label>
            <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="price" name="price" placeholder="New Sefer Price:">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php if($did===true):?>
            <h2><?=$_GET['name']?> for <?=$_GET['price']?> was inserted into sefarimlist db"</h2>;
           <?php endif ?>
    </div>
    
</body>
</html>