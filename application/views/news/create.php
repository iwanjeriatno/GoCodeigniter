<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

	<label for="title">Title</label><br>
	<input type="text" name="title"><br>

	<label for="text">Text</label><br>
	<textarea name="text" cols="30" rows="10"></textarea><br><br>

	<input type="submit" name="submit" value="Submit">

<?php echo form_close(); ?>