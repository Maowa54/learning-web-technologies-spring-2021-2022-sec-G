<?php
echo "Task 4:";
echo "<br>";

function largest($num1 , $num2, $num3){
    $max = $num1;
  if ($num1 >=$num2 && $num1 >=$num3) 
      $max = $num1;

      elseif ($num2 >=$num1 && $num2 >=$num3)  
       $max = $num2;

   else
     $max = $num3;
 echo "The largest number from three given numbers $num1, $num2 and $num3 is : $max\n";

}
 largest(50,40,70);
?>