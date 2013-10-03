<!DOCTYPE html>
<head>
<title>ICS415: A13 Server side scripting with PHP</title>
</head>

<html>
<body>

<?php

$con = mysql_connect('localhost', 'ics314', 'none');

if($con == false) { echo 'false' . mysql_error(); }

mysql_select_db('ics314', $con);

$sql="INSERT INTO `comments` (`comments_name`) VALUES ('{$_POST['comments']}')";

if (!mysql_query($sql, $con)) {
  die('Error: ' . mysql_error());
}

mysql_close($con)

?>

<?php

$con=mysqli_connect("localhost","ics314","none","ics314");

$result = mysqli_query($con,"SELECT * FROM comments");

while ($row = mysqli_fetch_array($result)) {
  echo $row['comments_name'];
  echo "<br>";
}

mysqli_close($con);

?>

<form method="post" action="form.php">

<textarea name="comments" cols="25" rows="5"></textarea><br>

<input type="submit" value="Submit" />

</form>

</body>
</html>