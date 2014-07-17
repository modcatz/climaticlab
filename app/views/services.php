<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>

<ul class="breadcrumbs">
		
</ul>
</header>
<div class="article_name maingreen">Услуги</div>
<div class="content services-inner">



<?php 
	foreach( $services as $service )
	{?>
		<div class="category-preview">
			<a href="<?=$siteUrl?>/services/<?php echo $service->id; ?>">
				<img class="category-preview_photo opacity50" src="<?php echo ( $service->image ) ? '/images/articles/' . $service->image : '/pics/category.png' ?>" alt="" />
				<span class="category-preview_name"><?php echo $service->title; ?></span>
			</a>
		</div>
	<?php
	}
 ?>

</div>

<?php echo $footer ?>