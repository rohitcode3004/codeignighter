<br><br><br><br>
	<h2><?php echo $title; ?></h2>

	<?php foreach($posts as $post): ?>
		<h3><?php echo $post['title']; ?></h3>
		<small class="post-data">Posted on: <?php echo $post['created_at']; ?></small><br>
		<?php echo $post['body']; ?>
		<br><br>
		<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</p>
		<?php endforeach; ?>