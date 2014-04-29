<?php
try {
$conn = new PDO('mysql:host=localhost;dbname=katis_shop','root',''
);
$conn->setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);
$conn -> exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
}
?>
<html>
<head>
<meta charset="UTF8">
<title>Katis-shop</title>
</head>
<body>
<ul>
<li><a href = "?action=list">Список всех самокатов</a></li>
<li><a href = "?action=add">Добавить самокат</a></li>
</ul>
<?php
$action = isset($_GET['action']) ? $_GET['action'] : 'list';
if ($action == 'add') {
require 'pages/add.php';
} elseif ($action == 'edit') {
require 'pages/edit.php';
} elseif ($action == 'delete') {
require 'pages/delete.php';
} else { 
require 'pages/list.php';
}
?>
</body>

</html>