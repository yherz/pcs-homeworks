<?php
 $langs=["HTML","CSS","Java","PHP","JavaScript","JQuery","C++","C#"];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['name'])){
    $errors[] = "Name is a required field";
    };
    if(empty($_POST['years'])){
    $errors[] = "years is a required field";
    }
    elseif($_POST['years'] < 0 || $_POST['years'] > 50){
    $errors[] = "Invalid Amount You must enter a number between 0 and 50";
    };
    if(empty($_POST['lang'])){
    $errors[] = "language is a required field";
    }
    elseif( !preg_grep("/".$_POST['lang']."/i", $langs )){
        $errors[] = $_POST['lang']. " is not recognized";
    }
};




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Programming Info</h1>
    </div>
</div>
<div class="container">
  <form method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="years">Years Been Coding For: </label>
        <input type="number" class="form-control" id="years" name="years" placeholder="Enter Number of Years" value="<?= isset($_POST['years']) ? $_POST['years'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="lang">Select Languages Your Familiar With</label>
         <input type="text" class="form-control" id="lang" name="lang" placeholder="Enter Languages Your Familiar With" value="<?= isset($_POST['lang']) ? $_POST['lang'] : ''; ?>">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    <div>
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors)):?>
         <ul class="well text-danger">
        <?php foreach($errors as $error):?>
             <li><?=$error?></li>
        <?php endforeach ?>
        </ul>
        <?php elseif($_SERVER['REQUEST_METHOD'] === 'POST') :?>
        <h3>Thanks for submitting your info</h3>
        <?php endif ?>
    </div>
  </form>
  </div>  
</body>
</html>