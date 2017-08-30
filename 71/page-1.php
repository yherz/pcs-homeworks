
<?php
date_default_timezone_set('America/New_York'); 

$date = date('m/d/Y h:i:s a', time());
setCookie("welcomeCookie", "$date", time() + (60 * 60));

if(empty($_COOKIE["welcomeCookie"])){
$welcomeMsg = "welcome for the first time";
}
else{
$welcomeMsg = "Welcome Back - you last visited ".$_COOKIE["welcomeCookie"];
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
            <h1>Welcome to our site</h1>
        </div>
        <h2><?=$welcomeMsg?></h2>
    </div>
</body>
</html>


<!--
    //setCookie("Cookie1", "A small step for a man", time() + 30);

    if(!empty($_COOKIE["ColorCookie"])) {
        
    } else {
        $color = "white";
    }

    if(!empty($_GET["color"])) {
        $color = $_GET["color"];
    } 

    

    //setCookie("ColorCookie", "$color", time() - (60 * 60)); // expire the cookie 1 hour ago
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: <?= $color ?>;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>The cookie page</h1>
    <form>
        <input type="color" name="color"/>
        <input type="submit"/>
    </form>
</body>






