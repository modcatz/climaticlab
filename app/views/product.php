<?php echo $headerView; ?>
<body>
<div class="order-popup js-order">
<div class="order-popup_background js-close-popup"></div>
					<form id="order-form" method="post" action="">
					<div class="order-label">Оставьте данные для связи с вами, мы обязательно перезвоним и предложим наилучшие условия по данному продукту.</div>
					<div class="input-wrapper">
					<input class="order-form_input js-uu form-validation placeholder" name="name" type="text" value="Имя" /> 
					<input class="order-form_input form-validation placeholder" name="email" type="text" value="E-mail"  />
					</div>
					<textarea class="order-form_msg form-validation placeholder" name="message" type="text">Ваше сообщение</textarea>
					<button class="order-form_submit lightred" name="submit">Заказать</button>
				</form>

			</div>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<ul class="breadcrumbs">
			<li><a href="<?=$siteUrl?>/catalogue">Каталог оборудования</a></li> 
			<li><a href="<?=$siteUrl?>/category/<?php echo $category->id; ?>"><?php echo $category->title ?></a></li> 
			<li><?php echo $product->title ?></li>
		</ul>
</header>
<div class="content">
	<div class="product">
	<div class="product_photo-wrapper">
		<div class="product_photo-full">
			<?php for( $i = 0; $i < count( $images ); $i++ )
			{ ?>			
					<img class="product_main-photo<?php if( $i != 0 ){ echo ' hidden"'; } else { echo '"'; } ?>" src="<?=$siteUrl?><?php echo ( $images[$i]['image'] ) ? '/images/products/full/' . $images[$i]['image'] : '/pics/category.png' ?>" alt="product" />			
			<?php
			}
			?>
			</div>
		<div class="product_photo-thumb">
			<?php for( $i = 0; $i < count( $images ); $i++ )
			{ ?>			
								
					<img class="product_preview-photo" src="<?=$siteUrl?><?php echo ( $images[$i]['image'] ) ? '/images/products/thumb/' . $images[$i]['image'] : '/pics/category.png' ?>" alt="<?php if( isset( $images[$i]['title'] ) ) { echo $images[$i]['title']; }?>" />
		
			<?php
			}			
			?>
		</div>
	</div>
		<article class="product_description">
			<div class="product_name article_h2"><?php echo $product->title ?></div>
			<div class="product_text article_text"><p><?php echo nl2br( $product->description ) ?></p>
			<button class="product_order">Заказать</button>	
			</div>
			</article>
		
	</div>
	

</div>

<?php echo $footer ?>