<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=“es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Titulo de la página </title>
</head>
<body>
<h2> Bienvenido sobre el sitio PHP 5 </h2>
<?php
echo "<h3>primera variable</h3>";
$a = "ManejadorSQL";
echo "<h3>segunda variable</h3>";
$b = 'MySQL';
echo "<h3>tercera variable</h3>";
$c = & $a;
?>

<?php
echo "<h3>4° variable</h3>";
$a = "PHP server";
echo "<h3>5° variable</h3>";
$b = & $a;
?>

</body>
</html>
