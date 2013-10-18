<?php echo $header; ?>

<div class="master-wrap box-shadow">
	<!-- Main container -->
	<div class="container">
		<div class="row head">
			<div class="sixteen columns">
				<h1><?php echo Kohana::$config->load('settings.site_name'); ?> Admin</h1>
			</div>
		</div>
		<!-- Left nav -->
		<div class="left-nav-container four columns">
			<div class="group">
				<h1>User</h1>
				<ul>
					<li>Item 1</li>
					<li>Item 2</li>
				</ul>
			</div>
			<div class="group">
				<h1>Pages</h1>
				<ul>
					<li>Item 1</li>
					<li>Item 2</li>
				</ul>
			</div>
		</div>
		<div class="twelve columns">
			<div class="pagetitle"><h2><?php echo $section; ?></h2></div>
			<?php echo $content; ?>
		</div>
	</div>
</div>

<?php echo $footer; ?>