<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/'.$news_item['id']); ?>

	<label for="title">Title</label><br>
	<input type="text" name="title" value="<?php echo $news_item['title'] ?>"><br>

	<label for="text">Text</label><br>
	<textarea name="text" cols="30" rows="10"><?php echo $news_item['text'] ?></textarea><br><br>

	<input type="submit" name="submit" value="Submit">

<?php echo form_close(); ?>