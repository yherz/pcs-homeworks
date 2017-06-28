<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
 <?php if (!empty($_POST["name"])) {
    echo "Name is" . " " . $_POST["name"];    
    }else{  
    echo "ERROR, name is not set";
    }?>
        <br>
     <?php if (!empty($_POST["email"])) {
    echo "Email". " " . $_POST["email"];    
    }else{  
    echo "ERROR, email is not set";
    }?>
   <br>
      <?php if ((!empty($_POST["age"])) && ($_POST["age"])>0 && ($_POST["age"])<120){ 
     echo  "age is". " " . $_POST["age"];    
    }else{  
    echo "ERROR, age is not set";
    }?>
    <br>
    <?php if (!empty($_POST["rating"])) {
    echo  "rating"." " . $_POST["rating"];    
    }else{  
    echo "ERROR, rating is not set";
    }?>
   <br>
</body>
</html>