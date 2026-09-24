<?php
$num1=12;
$num2=18;
 
$a=$num1;
$b=$num2;

while($b!=0){
$remainder=$a % $b;
$a=$b;
$b=$remainder;
}
$gcf=$a;
$lcm=($num1*$num2)/$gcf;
echo "GCF of $num1 and $num2=$gcf";
echo "<br>";
echo "LCM of $num1 and $num2=$lcm";
?>