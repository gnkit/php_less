<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>ID</th>
			<th>Наименование</th>
			<th>Cсылка</th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['id']; ?></td>
			<td><?= $product['name']; ?></td>
			<td><a href="/product/<?= $product['id']; ?>/">ссылка на страницу</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>