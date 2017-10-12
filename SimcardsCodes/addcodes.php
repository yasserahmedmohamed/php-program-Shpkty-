<?php
include "connect.php";
?>











<?php

$code_for_eti=@fopen("codes.txt","r");//code
$buffer_Name_for_eti=array("الغاء باقه النت",
    "ميعاد تجديد الباقه النت",
    "لمعرفه استهلاك الباقه النت",
    "تجديد نفس الباقه",
    "باقه نت 5 جنيه",
    "باقه نت 10",
    "باقه نت 15",
    "باقه نت 25",
    "باقه نت 50",
    "تغير نظام المكالمات",
    "تجديد باقه المكالمات قبل الميعاد",
    "معرفه الاستهلاك لدقائق الشبكات الاخري",
    "الاستعلام عن تجديد باقه المكالمات",
    "الاستعلام عن تجديد باقه المكالمات",
    "الاستعلام عن رقم الخط",
    "الاستعلام عن الرصيد",
    "الاستعلام عن الرصيد",
    "الغاء خدمه الكول تون",
    "تجديد باقه المكالمات قبل الميعاد",
    "معرفه استهلاكك لدقائق الشبكات الاخري",
    "الاستعلام عن تجديد باقه المكالمات",
    "الاستعلام عن تجديد باقه المكالمات",
    "الاستعلام عن رقم الخط",
    "الاستعلام عن الرصيد",
    "الاستعلام عن الرصيد",
    "الغاء خدمه الكول تون",
    "لتحول الرصيد",
    "للاشتراك او الغاء الخدمات الاخباريه",
    "رقم خدمه العملاء",
    "لخدمه كلمني شكرا",
    "لخدمه سلفني شكرا"
);

if($code_for_eti) {

    $i=0;

    while ((($buffer_Code = fgets($code_for_eti, 4096)) !== false) ) {
        $query="INSERT INTO `codes`(`net`, `cod`, `des`) VALUES ('1','".$buffer_Code."','".$buffer_Name_for_eti[$i]."')";
        $res=mysqli_query($coonect,$query);

        echo "<br/>".$code_for_eti[$i]."<br/>";
        echo "           "."  " . $buffer_Code . "<br/>";
        $i++;

    }
    if (!feof($code_for_eti)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($code_for_eti);

}
//**********************************************************************************************************************
$Code_f0r_vodafone=@fopen("codesvo.txt","r");
$buffer_Name_forV0dafone=array(
    "الغاء باقه النت",
    "باقه نت 5 جنيه 150 ميجا",
    "باقه نت 10 جنيه 400 ميجا",
    "باقه نت 25 جنيه 1,25 جيجا",
    "باقه نت 40 جنيه 2,25 جيجا",
    "باقه نت 60 جنيه 3,50 جيجا",
    "باقه نت 100 جنيه 7 جيجا",
    "للاشتراك في باقه كنترول 15 400 فيلكس",
    "للاشتراك في باقه كنترول 25 800 فيلكس",
    "للاشتراك في باقه كنترول 40 1600 فيلكس",
    "للاشتراك في باقه كنترول 60 2500 فيلكس",
    "للاشتراك في باقه كنترول 80 3500 فيلكس",
    "لمعرفه استهلاكك والفلكسات المتبقيه",
    "لتجديد باقه النت",
    "لتغير نظام المكالمات",
    "للاستعلام عن تجديد باقه المكالمات",
    "للاستعلام عن رقم الخط",
    "للاستعلام عن الرصيد",
    "لالغاء خدمه الكول تون",
    "لتحويل الرصيد",
    "رقم خدمه العملاء"
);

if($Code_f0r_vodafone) {

    $i=0;

    while ((($buffer_Code2 = fgets($Code_f0r_vodafone, 4096)) !== false) ) {
        $query="INSERT INTO `codes`(`net`, `cod`, `des`) VALUES ('2','".$buffer_Code2."','".$buffer_Name_forV0dafone[$i]."')";
        $res=mysqli_query($coonect,$query);

        echo "<br/>".$Code_f0r_vodafone[$i]."<br/>";
        echo "           "."  " . $buffer_Code2 . "<br/>";
        $i++;

    }
    if (!feof($Code_f0r_vodafone)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($Code_f0r_vodafone);

}
//(*********************************************************************************************************************
$Code_f0r_ornge=@fopen("codesor.txt","r");
$buffer_Name_forornge=array(
    "الغاء باقه النت",
    "لمعرفه ميعاد تجديد باقه النت",
    "باقه نت 5 جنيه",
    "باقه نت 10 جنبه",
    "باقه نت 25 جنيه",
    "باقه نت 50 جنيه",
    "تغير نظام المكالمات",
    "للاستعلام عن رقم الخط",
    "للاستعلام عن الرصيد",
    "لالغاء خدمه الكول تون",
    "لتحويل الرصيد",
    "رقم خدمه العملاء",

);

if($Code_f0r_ornge) {

$i=0;

    while ((($buffer_Code = fgets($Code_f0r_ornge, 4096)) !== false) ) {
        $query="INSERT INTO `codes`(`net`, `cod`, `des`) VALUES ('3','".$buffer_Code."','".$buffer_Name_forornge[$i]."')";
         $res=mysqli_query($coonect,$query);

       echo "<br/>".$Code_f0r_ornge[$i]."<br/>";
       echo "           "."  " . $buffer_Code . "<br/>";
        $i++;

    }
    if (!feof($Code_f0r_ornge)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($Code_f0r_ornge);

}
?>










<?php
//close the connection
mysqli_close($coonect);

?>
