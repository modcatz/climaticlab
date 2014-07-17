<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<?php
	switch( $page )
	{
		case 'objects':
			$bc_page = 'Наши объекты';
			break;
		case 'services':
			$bc_page = 'Услуги';
			break;
		case 'index':
			$bc_page = 0;
			break;

	}
?>
<ul class="breadcrumbs">
	
	<?php if( $bc_page ) {?> <li><a href="<?=$siteUrl . '/' . $page?>"><?=$bc_page?></a></li><?php } ?>
	<?php  ?><li><?php echo $article->title;  ?></li>
	
</ul>
</header>
<div class="article_name mainblue"><?=$article->title; ?></div>
<div class="content inner-text">
	<article>
		
		<?php echo $article->content ?>
	</article>
</div>

<?php echo $footer ?>