<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<ul class="breadcrumbs">
	<li>Каталог оборудования</li> 
</ul>
	<div class="content">
		
			<div class="article_name mainred">Бренды</div>

			<?php foreach( $brands as $item )
			{ ?>
					<a href="<?=$siteUrl?>/brand/<?php echo $item->id; ?>"><?php echo $item->title; ?></a><br/>
				
			<?php 
			} 
			?>		
	</div>
<?php echo $footer ?>
	
