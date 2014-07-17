<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<ul class="breadcrumbs">
	<li>Наши объектыs</li>
	
</ul>
</header>
<div class="content">
<div class="article_name mainblue">Наши объекты</div>
<?php 
	foreach( $objects as $object )
	{
	 	echo '<?=$object->title;?><br />';	
	}?>

</div>

<?php echo $footer ?>