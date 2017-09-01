<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "school";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,null);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT item FROM supplies"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN); 

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
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
    <div class="jumbotron">
        <h1>Cart</h1>
    </div>
    <div class="container">
        <form class="form-inline" action="cart.php">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="item">
             <?php 
                foreach ($result as $item){
                    echo"<option> $item </option>";
                    print_r($item);
                     }
                     ?>
                </select>
            <label class="sr-only" for="inlineFormInput">Quantity</label>
            <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="quantity">
            </div>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
            <br>
            <a href="viewCart.php">View Cart</a>
            
        </form>
    </div>
    
</body>
</html>