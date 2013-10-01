<!DOCTYPE html>
<head>
<title>ICS415: A13 Server side scripting with PHP</title>
</head>

<html>
<body>

<?php
$file=fopen("comment.txt","a+") or exit("Unable to open file!");
$var = $_POST["comments"];
fwrite($file,"\n$var");
fclose($file);
?>

<?php

$file=fopen("comment.txt","a+") or exit("Unable to open file!");
while(!feof($file)) {
echo fgets($file). "<br>";
}
fclose($file);


?>

<form method="post" action="form.php">

<textarea name="comments" cols="25" rows="5"></textarea><br>

<input type="submit" value="Submit" />

</form>

<form method="link" action="a13.php">
<input type="submit" value="Reset comments.txt">
</form>
</body>
</html>