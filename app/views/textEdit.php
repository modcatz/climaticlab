<!doctype html>
<html lang="ru">
<head>
	
	<?php echo HTML::style('css/style.css'); ?>	
	<?php echo HTML::script('js/jquery-1.11.0.min.js'); ?>
	<?php echo HTML::script('js/script.js'); ?>
    <?php echo HTML::script('tinymce/tinymce.min.js'); ?>     
</head>
<script type="text/javascript">
tinymce.init({

    selector: '#textEdit',
    plugins: ["jbimages code"],
    valid_elements : '+*[*]',

    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages code",
    menubar : false,
    height: 300

});

$(document).on('click', '#cancel-button', function(){

	$('#cancel').attr('value','0')
	$('#textEdit-form').submit();

});

</script>

<body>
	<form id="textEdit-form" class="newpost_form" action="" method="POST">
		<label name="title">Введите заголовок:</label><input name="title" type="text" class="newpost_title" value="<?php echo $text->title; ?>" /><br /><br />
		<textarea name="content" id="textEdit" rows="5" cols="80"><?php echo $text->content; ?></textarea>
		<input id="cancel" name="cancel" class="hidden" type="text" value="1" />
		<input id="cancel-button" class="newpost submit" type="button" value="Отменить" />
		<input class="newpost submit" type="submit" value="Отправить" />		
	</form>
<script>
/*CKEDITOR.replace( 'textEdit', { 'width' : '800px', 'height' : '300px', 'resize_enabled' : false });*/
/*CKEDITOR.instances.textEdit.insertHtml();*/
</script>
</body>
</html>

