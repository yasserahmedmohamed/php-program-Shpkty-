<?php

$handle=@fopen("C:\Users\lenovo\Desktop\codes.txt","r");
if($handle){


    while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer."<br/>";
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}




?>