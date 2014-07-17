<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<ul class="breadcrumbs">
	
</ul>
<div class="selectmenu-wrapper">
			<select class="selectmenu">
				<option value="#">Категории</option>
				<option value="#">Бренды</option>
			</select>
		</div>
</header>
<div class="content">

	<?php $i = 1;
		  foreach( $categories as $key => $category )
		  
	{ ?>
		<div class="article_name <?php echo ( $i % 2 == 0 ) ? 'mainorange' : 'mainred'; ?>"><?php echo $key; ?></div>

		<?php foreach( $category as $item )
		{ ?>
			<div class="category-preview">
				<a href="<?=$siteUrl?>/category/<?php echo $item->id; ?>">
				<img class="category-preview_photo" src="<?php echo ( $item->image ) ? '/images/products/' . $item->image : 'pics/category.png'  ?>" alt="category" />
				<span class="category-preview_name"><?php echo $item->title ?></span></a>
			</div>	
		<?php 
		} 
		?>
		
	<?php
		$i++;
	}
	?>

</div>
<?php echo $footer ?>
	
