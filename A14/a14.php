<!DOCTYPE html>
<head>
<title>ICS415: A14 Update comment system to use MySQL</title>
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

mysql_close($con);

?>

<p style="margin:0;">Enter your comments in the box below:</p>

<form method="post" action="form.php">

<textarea name="comments" cols="25" rows="5"></textarea><br>

<input type="submit" value="Submit" />

</form>
</body>
</html>