<?php
    function is_leap_year($year) {
        $days=0;
	if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0))){
        $days=29;
    }
    else{
        $days=28;
    }
    return $days;
}
    $daysInMonth=[31,20,31,30,31,30,31,31,30,31,30,31]; 
    if($_SERVER['REQUEST_METHOD']==="POST"){
    $month=($_POST["Month"]);
    $years=($_POST["Year"]);
    }

?> 
    <?php if($_SERVER['REQUEST_METHOD']==="POST"){
                if($month=="2"){
                    echo (is_leap_year($years));
                }
                else{
                    echo "<h1>".$daysInMonth[($month-1)]."<h1>";
                }
            }
     ?>