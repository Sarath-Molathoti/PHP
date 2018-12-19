<html>
<head>
     <title>My Webpage</title>
<body>
<center>
<h2>Update Your Details</h2>
<p>
<?php
include "links.php";
?>
</center>
<center>
<form action="update.php" method="post">
<table>
<tr><td>Roll No </td><td><input type="text" name="rollno" style="margin-bottom:5px;"> </td></tr>
<tr><td>Name  </td><td><input type="text" name="name" style="margin-bottom:5px;"></td></tr>
<tr><td>Password </td><td><input type="text" name="password" style="margin-bottom:5px;"></td></tr>
<tr><td>State </td><td><input type="text" name="state" style="margin-bottom:5px;"></td></tr>
<tr><td><input type="submit" value="Save/Update"></td></tr>
</table>
</form>
</center>
</body>
</html>
