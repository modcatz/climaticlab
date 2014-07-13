<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<ul class="breadcrumbs">
	<li><a href="<?=$siteUrl?>/">Главная</a></li>
	<li>Наши объекты</li>
	
</ul>
</header>
<div class="content">
<div class="article_name mainblue">Наши объекты</div>
<?php 
	foreach( $objects as $object )
	{?>
		<a href="<?=$siteUrl . '/objects/' . $object->id?>"><?=$object->title;?></a><br />
	<?php
	}?>

</div>

<?php echo $footer ?>