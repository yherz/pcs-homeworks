 <?php
    function months(){
        for($i = 1;$i<13;$i++){
            $ret .= "<option>" . $i . "</option>";
        }
       return $ret;
    }
    function year(){
        for($i = 1990;$i<2099;$i++){
            $ret .= "<option>" . $i . "</option>";
        }
       return $ret;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="61-2.php"method="POST">
            <select name="Month">
                <?= months() ?>
            </select>
            <select name="Year">
                <?= year() ?>
            </select>
            <input type="submit">
        </form>

    
    </body>
</html>