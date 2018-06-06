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

<ul>
  <li><a href ="index.php?page=home">Startpagina</a></li>
  <li><a href ="index.php?page=about">Over ons</a></li>
  <li><a href="prijzenlijst.html"></a></li>

</ul>

<?php include 'includes/'.$page.'.inc.php'; ?>

</body>

</html>
