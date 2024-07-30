<?php 
$inferior = $_GET['i'];
$superior = $_GET['s'];
$c = 0;

do{
    echo $inferior."<br>";
    if ($inferior%7 == 0){
            $c++;
        }
    $inferior++;
}while($inferior <= $superior);
echo "Contador: ".$c;
?>((()))