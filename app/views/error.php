<?php echo $headerView; ?>
<body>
<div class="wrapper">
<?php echo $menu; ?>

<div class="content">
<?php
if( $message == '404' )
{
	echo 'Данной страницы не существует';
}
?>
</div>
<?php echo $footer; ?>