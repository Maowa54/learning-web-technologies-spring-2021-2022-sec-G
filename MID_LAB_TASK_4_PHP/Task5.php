<?php
echo "Task 5:";

echo "<br>";

echo "All the odd numbers between 10 to 100 : ";
echo "<br>";

for ($i = 10; $i <= 99; $i += 2) {
    if($i != $i+1){
        echo $i+1 . " ";
    } 
}

?>