<!DOCTYPE HTML>
<html lang="pl"> 
<head>
<meta charset="utf-8" />
<title>Wynik</title>
</head>
<body>
<?php
$staredpi = $_POST['staredpi'];
$staraczulosc =$_POST['staraczulosc'];
$nowedpi =$_POST['nowedpi'];
$aktualnysens=$staredpi*$staraczulosc/$nowedpi;
echo $aktualnysens
?>

</body>
</html>