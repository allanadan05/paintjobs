<?php 

require 'database.php';
$pdo = Database::connect();


if(isset($_GET['complete'])){
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "UPDATE customer SET remark='Done' WHERE id=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($_GET['complete']));
	
	Database::disconnect();
	header("Location: index.php?page=2");

}

if(isset($_POST['submit'])){
    

	if($_POST['submit']=="new"){
    
    $platenum=$_POST['platenum'];
    $currentcolor=$_POST['currentcolor'];
    $targetcolor=$_POST['targetcolor'];
    $remark="Queue";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO customer (platenum,currentcolor,targetcolor, remark) values(?,?,?,?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($platenum,$currentcolor,$targetcolor, $remark));
	
	Database::disconnect();
	header("Location: index.php?page=2");

    

    }


}

?>
