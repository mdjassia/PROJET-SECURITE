<?php
session_start();
mysqli_connect("localhost", "root", "");
$link =mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"gestion");
?>
<html>
<body>
<?php
include('cadre.php');
?>
<div class="corp">
</div>
</body>
</html>
