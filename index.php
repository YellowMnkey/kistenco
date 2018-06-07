<?php
if(isset($_GET['page'])) {
	$page = $_GET['page'];
}else{
	$page='home';
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="\styles\style.css">

<title>Kisten & Co</title>
</head>

<body>

<h1>Home</h1>


<?php include 'includes/navbar.inc.php';?>
<?php include 'includes/'.$page.'.inc.php'; ?>



</body>

</html>
