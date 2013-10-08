<?php 
 if (!empty($_POST)) {
  // set the cookie with the submitted user data
  setcookie('usercookie',$_POST['username']);
  // redirect the user to final landing page so cookie info is available
  header("Location:form.php");
 }
 ?>

<!DOCTYPE html>
<head>
<title>ICS415: A15 - Update comment system to have users</title>
</head>

<html>
<body>

<?php

$con = mysql_connect('localhost', 'ics314', 'none');

mysql_select_db('ics314', $con);

$sql = "CREATE TABLE IF NOT EXISTS `comments` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`comments_name` varchar(255),
PRIMARY KEY (`id`)
)";

mysql_query($sql, $con);

$table = 'comments';
$column = 'username';

mysql_query("ALTER TABLE $table ADD $column VARCHAR (255)");

mysql_close($con);

?>

<form method="post" action="form.php">
Input username: <input type="text" name="username" /><br><br>
<p style="margin:0;">Enter your comments in the box below:</p>

<textarea name="comments" cols="25" rows="5"></textarea><br>

<input type="submit" value="Submit" />

</form>
</body>
</html>