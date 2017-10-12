<?php
include "connect.php";
?>












<?php
$net=$_GET{"net"};
$cod=$_GET{"cod"};
$des=$_GET{"des"};
$query="INSERT INTO  `codes`(`net`, `cod`, `des`) VALUES ('".$net."','".$cod."','".$des."')";
$res=mysqli_query($coonect,$query);
if (!$res){
    echo "there is problem :".mysqli_error($coonect);
}
else{
    echo "add successful";
}
?>
















<?php
//close the connection
mysqli_close($coonect);

?>
