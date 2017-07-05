<?php

$style = "italic";

if(!empty($_GET["color"])){
    $color= $_GET["color"];
}
else{
   $color = "orange"; 
}
if(isset($_GET["italic"])){
    $style="italic";
}
else{
   $style="none"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hw60</title>
    <style>
        body p{
        color: <?php echo $color ?>;
        font-style: <?php echo $style ?>;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class = "container">
    <div class = "jumbotron">
        <h1 class = "text-center">HW 60</h1>
    </div>
  </div> 

  </div>
    <div class="container">
    <form>
  <div class="form-group">
    <label for="color">Color:</label>
    <input type="text" class="form-control" id="color" name="color">
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="italic">do you want text to be italicized?</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>