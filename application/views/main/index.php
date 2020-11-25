<p>Главная страница</p>

<?php foreach ($news as $val): ?>
	<h3><?php echo $val['name']; ?></h3>
<!--	<p>--><?php //echo $val['description']; ?><!--</p>-->
	<hr>
<?php endforeach; ?>