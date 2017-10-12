<?php

include "connect.php";
?>





<?php


$handle=@fopen("changed.txt","r");
if($handle){


   $buffer = fgets($handle, 4096);
   $arr=array("ver"=>$buffer);
    echo json_encode($arr);
   $buffer++;



}
$handleclose=@fopen("changed.txt","w");
fwrite($handleclose,$buffer);


?>














<?php
//close the connection
mysqli_close($coonect);

?>

