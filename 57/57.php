
<?php
    $presidents = [
        [ "Donald Trump",
         "2017-"
        ],
        ["Barack Obama",
         "2009-2017"
        ],
        [   "George W. Bush",
            "2001-2009"
        ]
    ];

    $presidentsA = [
        [ "name" =>"Donald Trump",
           "years" =>"2017-"
        ],
        [  "name" =>"Barack Obama",
          "years" =>"2009-2017"
        ],
        [   "name" => "George W. Bush",
            "years" =>"2001-2009"
        ]
    ];
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
    <table class="table table-bordered">
        <tbody>
        <thead>
            <tr>
                <th>President Name</th>
                 <th>Years in Office</th>
            </tr>
        </thead>  
    <?php
    $length =  count($presidents);
   #echo  $length;

}
            for($i=0; $i< $length; $i++){
                echo "<tr>";
                for($j=0; $j < count($presidents[$i]); $j++){
                 echo "<td>" . $presidents[$i][$j]."</td>";
                };
                echo "</tr>";
            };
        ?>
         </tbody>
        </table>
        </div>

            <div class="container">
    <table class="table table-bordered">
        <tbody>
        <thead>
            <tr>
                <th>President Name</th>
                 <th>Years in Office</th>
            </tr>
        </thead>  
    <?php
   #echo  $length;
        foreach($presidentsA as $pres){
            echo "<tr><td>" . $pres["name"] . "</td><td>". $pres["years"]."</td></tr>";
        }
        ?>
         </tbody>
        </table>
        </div>
    </body>
</html>