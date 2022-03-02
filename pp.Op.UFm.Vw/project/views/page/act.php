<div>
	это представление действия act контроллера test
</div>
<!-- <ul> -->
	<!-- <li><?php //echo $var1; ?></li> -->
	<!-- <li><?php //echo $var2; ?></li> -->
	<!-- <li><?php //echo $var3; ?></li> -->
<!-- </ul> -->

<h1><?= $header ?></h1>
<ul>
	<?php foreach ($users as $user): ?>
		<li><?= $user; ?></li>
	<?php endforeach; ?>
</ul>