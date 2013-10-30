<div class="left-nav-container four columns">
	<?php foreach($admin_pages as $group_k => $group_v): ?>
		<div class="group">
			<h1><?php echo $group_k; ?></h1>
			<ul>
			<?php foreach($group_v as $item_k => $item_v): ?>
				<li><a href="/admin/<?php echo $item_v['url']; ?>"><?php echo $item_v['page']; ?></a></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endforeach; ?>
</div>