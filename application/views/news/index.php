<a href="<?php echo site_url('news/create') ?>">Create News</a> <br>

<?php foreach ($news as $item) { ?>
		
			<h2><a href="<?php echo site_url('news/'.$item['slug']) ?>"><?php echo $item['title'] ?></a></h2>
			<p><?php echo $item['text'] ?></p>

			<a href="<?php echo site_url('news/'.$item['id'].'/edit') ?>">Edit</a> | 
			<a href="<?php echo site_url('news/delete/'.$item['id']) ?>">Delete</a>

			<hr>

<?php } ?>