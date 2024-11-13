<?php
$fac=(int)$_POST['fac'];
if ($fac<0) {
    echo "Factorial is not defined for negative numbers.";
} else {
    $res = 1; 
    for ($i=1;$i<=$fac;$i++) {
        $res*= $i; 
    }
    echo "The factorial of $fac is $res.";
}
?>
