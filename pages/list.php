<?php
$statment = $conn->prepare('SELECT * FROM products');
$statment->execute();
$products = $statment->fetchAll();
echo '<table>';
foreach ($products as $product) {
echo '<tr>
	<td>' . $product['id'] . '</td>
	<td>' . $product['sku'] . '</td>
	<td>' . $product['title'] . '</td>
	<td>' . $product['price'] . '</td>
	<td><a href = "?action=edit&id' . $product['id'] . '">Редактировать</a></td>
	<td><a href = "?action=delete&id' . $product['id'] . '">Удалить</a></td>
	</tr>';
}

echo '</table>';



