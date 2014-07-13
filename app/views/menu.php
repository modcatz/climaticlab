<?php if( !isset( $page ) ) { $page = 0; } ?>
<div class="header_title">
	<a class="header_title_logo" href="<?=$siteUrl?>/"></a>
	<address>
		<div class="header_title_email">info@climaticlab.ru</div>
		<div class="header_title_address">Москва, Охотный Ряд, 2</div>
	</address>
</div>
<nav class="main-menu">
	<ul class="main-menu_elements">
			<li class="main-menu_elements_item <?php if( $page == 'index'){ echo 'active'; }?>"><a href="<?=$siteUrl?>/">Главная</a></li>
			<li class="main-menu_elements_item <?php if( $page == 'catalogue' || $page == 'category' || $page == 'product' ){ echo 'active'; }?>"><a href="<?=$siteUrl?>/catalogue">Каталог оборудования</a></li>
			<li class="main-menu_elements_item <?php if( $page == 'services'){ echo 'active'; }?>"><a href="<?=$siteUrl?>/services">Услуги</a></li>
			<li class="main-menu_elements_item <?php if( $page == 'objects'){ echo 'active'; }?>"><a href="<?=$siteUrl?>/objects">Наши объекты</a></li>
		<li class="main-menu_elements_item <?php if( $page == 'contacts'){ echo 'active'; }?>"><a href="<?=$siteUrl?>/contacts">Контакты</a></li>
		</ul>
</nav>