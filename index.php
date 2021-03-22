<?php include('header.php'); ?>

<?php if (isset($_GET['page'])) include('page' . $_GET['page'] . '.php');
else include('page1.php');
?> 

<?php include('footer.php'); ?>
 
	

