<?php
$marks=array(85,72,90,25,60,30,80,45);
$distinction=0;
$failed=0;
foreach($marks as $mark)
{
if($mark>=75){
$distinction++;
}
elseif($mark<35){
$failed++;
}
}
echo "Distinction Students=$distinction";
echo "<br>";
echo "Failed Students=$failed";
?>
