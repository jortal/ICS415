<!DOCTYPE html>
<head>
<title>ICS415: A13 Server side scripting with PHP</title>
</head>

<html>
<body>

<?php

$file=fopen("comment.txt","w+") or exit("Unable to open file!");
fclose($file);

?>

<p style="margin:0;">Enter your comments in the box below:</p>
<form method="post" action="form.php">

<textarea name="comments" cols="25" rows="5"></textarea><br>

<input type="submit" value="Submit" />

</form>
</body>
</html>