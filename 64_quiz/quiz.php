<?php
$servername = "localhost";
$username = "root";
$password = "null";
$db = "students";
try {
    
    $conn = new PDO("mysql:host=$servername;dbname=students", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $sql = "SELECT name FROM `grades` group by name";
    $result = $conn->query($sql);
    $studentNames = $result->fetchAll(PDO::FETCH_COLUMN);

   function getGrade($name,$conn){
    $sql2 = "SELECT grde FROM `grades` where name='$name'";
    $result2 = $conn->query($sql2);
    $studentGrades = $result2->fetchAll(PDO::FETCH_COLUMN);
        foreach ($studentGrades as $grades){
            echo "<td>$grades</td>";
        }
   }
    

    print_r($studentNames);
  
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nameDel = $_POST['name'];
            $query3 = "DELETE FROM `grades` WHERE name='$nameDel'";
            $result3=$conn->query($query3);
         
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
         <table class="table table-bordered">
            <th>names</th>
            <th>grades</th>
                <?php foreach ($studentNames as $names) :?>
                <tr>
                <td><?= $names ?></td>
                <?php getGrade($names,$conn) ?>
                <form method="POST">
                <input type="hidden" name="name" value="<?= $names ?>">   
                <td><button type="submit" class="btn btn-primary">Delete</button></td>
                </form>
              </tr>
            <?php endforeach ?>
            </table>

    </div>
    
</body>
</html>