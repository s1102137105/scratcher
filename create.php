<?php

$item1 = $_GET["item1"];
$item2 = $_GET["item2"];
$item3 = $_GET["item3"];
$name = $_GET["name"];
$phone = $_GET["phone"];
$money = $_GET["money"];

$dsn = 'mysql:dbname=s1102137105;host=db.mis.kuas.edu.tw';
$user = 's1102137105';
$password = 'yoga123';

try{
    $link = new PDO($dsn,$user,$password);
} catch (PDOException $e) {
    printf("DatabaseError:%s",$e->getMessage());
}
 $link->query("set names utf8");

$link->exec("INSERT INTO `s1102137105`.`app_order` (`orderId`, `item1`, `item2`, `item3`, `name`, `phone`, `money`) VALUES (NULL, '".$item1."', '".$item2."', '".$item3."', '".$name."', '".$phone."','".$money."');");

// $sql_select="SELECT max(`orderId`) FROM `app_order`";
// $stmt=$link->query($sql_select);
// foreach ($stmt as $row){
//         //    var_dump($row);
//        //echo $row['max(`orderId`)'];
// 		$id=$row['max(`orderId`)'];
// 		//echo $id;
// }

// //$url='Location: ../order.php?orderId='.$id
// header('Location: ../order.php?orderId='.$id);
// exit;
?>
