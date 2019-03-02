<?php
$usr1=$_GET['user'];
$pas1=$_GET['pass'];
$arra=array();
$xa="";
$handle = fopen("data/ids.txt", "r");
 if ($handle) {while (($line = fgets($handle)) !== false) {
$text="".$line;$text=trim($text); $arra[] ="$text";}fclose($handle);}
foreach($arra as $va){
    
    $usr=strtok($va,"-");
    $pas=strtok("-");
    if($usr==$usr1&&$pas==$pas1){
        $xa="a";
    }
}
if($xa!="a"){
    
    echo "<title>true</title>";
    $dat=file_get_contents("data/ids.txt");
    file_put_contents("data/ids.txt",$dat."\n".$usr1."-".$pas1);
}
else{
    echo "<title>error</title>";
    
    
}
?>