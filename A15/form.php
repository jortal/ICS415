<!DOCTYPE html>
<head>
<title>ICS415: A15 - Update comment system to have users</title>
</head>

<html>
<body>

<?php

$con = mysql_connect('localhost', 'ics314', 'none');

if($con == false) { echo 'false' . mysql_error(); }

mysql_select_db('ics314', $con);

$sql="INSERT INTO `comments` (`comments_name`,`username`) VALUES ('{$_POST['comments']}', '{$_POST['username']}')";

if (!mysql_query($sql, $con)) {
  die('Error: ' . mysql_error());
}

mysql_close($con)

?>

<div style="float:left; width:25%;">
<h3 style="margin:0;"><u>Comments</u></h3>
<?php

$con=mysqli_connect("localhost","ics314","none","ics314");

$user = $_POST['username'];

$result = mysqli_query($con,"SELECT * FROM comments WHERE username='$user'");

    while ($row = mysqli_fetch_array($result)) {
    echo $row['comments_name'];
    echo "<br>";
    }

mysqli_close($con);

?>
</div>

<div style="float:left; width:25%">
  <h3 style="margin:0;"><u>Username</u></h3>
<?php
    echo $_COOKIE['usercookie'];
?>
</div>
</div>

<div style="clear:both;">
<br>
<p>
<form method="post" action="form.php">

Input username: <input type="text" name="username" /><br>
<textarea name="comments" cols="25" rows="5"></textarea><br>

<input type="submit" value="Submit" />

</form>
</p>
</div>

<?php

  $con=mysqli_connect("localhost","ics314","none","ics314");
  $userc=$_COOKIE['usercookie'];

  $result = mysqli_query($con,"SELECT * FROM comments WHERE username='$userc'");

  echo "Welcome ".$userc."!<br>";
  echo "You have ".mysqli_num_rows($result)." comments.<br>";
?>
</body>
</html>