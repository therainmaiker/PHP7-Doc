<?php

$movie =$_GET["movie"];
$actor =$_GET["actor"];
$date =$_GET["date"];



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<title><?php echo $movie; ?> </title>
    <h1>Information about <?php echo $movie; ?></h1>

<p> Based on the input, here is the information so far: <br>
<?php echo $actor;?> starred in the movie Avengers which was released in year <?php print $actor; ?>



</p>



</body>
</html>