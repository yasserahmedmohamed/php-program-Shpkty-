<?php
include "connect.php";

?>






<?php
require "CodDes.php";

$query=0;
$res=0;
$net=$_GET["net"];
if (!empty($_GET["ch"]))
{
    $char=$_GET["ch"];
$query="SELECT * FROM `codes` WHERE des LIKE '%".$char."%' AND net=".$net;

$res=mysqli_query($coonect,$query);
}
else{
    $query="SELECT * FROM `codes`WHERE net=".$net;
    $res=mysqli_query($coonect,$query);

}
if (!$res){
    $error_mesage=array("error"=>mysqli_error($coonect)." please enter valid character");

    json_encode($error_mesage);
    die("");
}

?>

<?php
if($res){
$records=0;
    $recordata=array();
while ($row=mysqli_fetch_assoc($res)) {

    $recordata[]=new CodDes($row["id"],$row["net"], utf8_decode ( $row["des"]),$row["cod"]);
    echo $row["des"]."  "."<br/>".$row["id"]."  "."  ".$row["net"]."  "."  ".$row["cod"]."<br/>";
    $records++;
}

$returndata=array("owner"=>"created by yasser ahmed mohamed","phone"=>"01143730269","email"=>"yasserahmed2999@yahoo.com","data_size"=>$records,"datacodes"=>$recordata);
echo json_encode($returndata);

}
mysqli_free_result($res);
?>





<?php
//close the connection
mysqli_close($coonect);

?>
