<?php echo $headerView; ?>
<body>
<div class="wrapper">
<header class="header">
<?php echo $menu; ?>
<ul class="breadcrumbs">	
	
</ul>
</header>

<div class="content">
	<div class="article_name mainorange">Обратная связь</div>
	<?php
			if( isset( $report ) )
			{ ?>
				<div class="contact-report"><?php echo $report; ?></div>
			<?php
			}
			 
			else
			{ ?>
				<form id="contact-form" method="post" action="">
					<div class="input-wrapper">
					<input class="contact-form_input js-uu form-validation placeholder" name="name" type="text" value="Имя" /> 
					<input class="contact-form_input form-validation placeholder" name="email" type="text" value="E-mail"  />
					</div>
					<textarea class="contact-form_msg form-validation placeholder" name="message" type="text">Ваше сообщение</textarea>
					<button class="contact-form_submit lightred" name="submit">Отправить</button>
				</form>
		<?php
			}
			?>
	
</div>

<?php echo $footer ?>
</div>
</body>
</html>