<?php include 'Includes/Conn.php'; ?>

<?php 
$query="Select * From users";
$result= mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diurma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Style/MainStyleSheet.css">
</head>
<body>

<!-- Header -->
<?php include 'Parts/Header.php'; ?>

<!-- Spacing -->
<div style="grid-column-start: 2; grid-column-end: 8;"></div>
<div style="grid-row-start: 1; grid-row-end:10;"></div>
<div style="grid-row-start: 1; grid-row-end:10; grid-column-start: 8; grid-column-end: 8;"></div>

<!-- page -->
<?php include 'Parts/Slideshow.php';?>

<?php include 'Parts/shortstories.php';?>

</body>
</html>