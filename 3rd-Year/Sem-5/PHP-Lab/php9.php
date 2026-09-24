<?php
$source="Source.txt";
$destination="copy.txt";
$sourceFile=fopen($source,"r");
$destinationFile=fopen($destination,"W");
while(!feof($sourceFile))
{
$character=fgets($sourceFile);
if($character!==false)
{
Fwrite($destinationFile,$character);
}
}
Fclose($sourceFile);
Fclose($destinationFile);
echo "File copied successfully:";
?>