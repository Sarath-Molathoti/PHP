<html>
<head>
     <title>My Webpage</title>
<body>
<center>
<h2>Delete Your Details</h2>
<p>
<?php
include "links.php";
?>
</center>
<center>
<form action="delete2.php" method="post">
<table>
<tr><td>Roll No </td><td><input type="text" name="rollno" style="margin-bottom:5px;"> </td></tr>
<tr><td>Password </td><td><input type="text" name="password" style="margin-bottom:5px;"></td></tr>
<tr><td><input type="submit" value="Delete User"></td></tr>
</table>
</form>
</center>
</body>
</html>
