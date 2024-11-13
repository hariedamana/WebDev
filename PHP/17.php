<?php
$m=(int)$_POST['mark'];
$tm=(int)$_POST['tmark'];
$p=$m/$tm *100;
if ($p >= 60){
    echo "First Division";
}
elseif ($p >= 45) {
    echo "Second Division";
} elseif ($p >= 33) {
    echo "Third Division";
} else {
    echo "Fail";
}
?>
