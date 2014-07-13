<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<ul class="breadcrumbs">
	<li><a href="<?=$siteUrl?>/catalogue">Каталог оборудования</a></li> 
	<li><?php echo $category ?></li>
</ul>
</header>
	
<div class="content">
	<div class="article_name mainred"><?php echo $category ?></div>
	<?php foreach( $products as $product )
	{ ?>
		<div class="category-preview">
			<a href="<?=$siteUrl?>/product/<?php echo $product->id; ?>">
			<img class="category-preview_photo" src="<?php echo ( $product->image ) ? $siteUrl . '/images/products/' . $product->image : $siteUrl . '/pics/category.png'  ?>" alt="category" />
			<span class="category-preview_name"><?php echo $product->title ?></span></a>
		</div>		
	<?php
	}
	?>
	<ul class="pagination">
	<!-- <li class="pagination_item<?php if( $page_n != 1 ) { echo '"><a href="<?=$siteUrl?>/category/' . Route::input( 'id' ) . '/1">первая</a>'; } else { echo ' disabled active">первая</li>'; } ?>	 -->	
	<?php 
		/*if( $page_n > 2 )
		{				
			$i = $page_n - 2;
			$n = $page_n + 2;

			if( $n > $pages )
			{
				$n = $pages;
			}

			if( $i < 1 )
			{
				$i = 1;
			}  
		}
		else
		{
			$n = 5;
			$i = 1;
		}*/

		for( $i = 1; $i <= $pages; $i++ )
	{ ?>
		<li class="pagination_item<?php if( $pages >=$i ){ if( $i == $page_n ) { echo ' disabled active' . '">' . $i . '</li>'; } else { echo '"> <a href="' . $siteUrl . '/category/' . Route::input( 'id' ) . '/' . $i . '">' . $i . '</a></li>'; } } ?>
	<?php
	}
	?>	
		
	</nav>
</div>

<?php echo $footer ?>