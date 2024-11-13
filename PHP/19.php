<?php
$n=(int)$_POST['num'];
if ($n>0){
    echo "Positive number";
}
elseif ($n==0) {
    echo "Number is Zero";
} 
else {
    echo "Negative number";
}
?>
