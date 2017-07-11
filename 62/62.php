<?php
$servername = "localhost";
$username = "root";
$password = "null";

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=sefarim", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 

    $sql = "SELECT * FROM `sefarimlist` WHERE 1";
    $result = $conn->query($sql);
        $sefarimNames = $result->fetch();

        while($sefarimNames) {
            $Names[] ="{$sefarimNames['name']}";

            $sefarimNames = $result->fetch();
        }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $selected = $_POST["list"];
        $sql2 = "SELECT `price` FROM `sefarimlist` WHERE name = '$selected'";
        $result2 = $conn->query($sql2);
            $sefarimPrice = $result2->fetch();
           
        }
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
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
            <h1 class="text-center">Sefarim</h1>
        </div>
        <form method="POST">
            <div class="form-group">
                <label for="list">Sefarim List:</label>
                <select name="list">
                    <?php foreach($Names as $Name){
                        echo"<option>".$Name."</option>";
                    }
                    ?>
                </select>
                <?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo"<h1> $sefarimPrice[0]</h1>"?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>   
</body>
</html>