<?php echo $header; ?>

<div class="container head">
	<div class="sixteen columns">
		<div class="eight columns alpha">
			<h1 class="font-white"><?php echo Kohana::$config->load('settings.site_name'); ?> Admin</h1>
		</div>
		<div class="eight columns omega status font-lightblue">
			Logged in as <strong><?php echo $active_user['name']; ?></strong>
			<a href="/admin/logout" class="button">Logout</a>
		</div>
	</div>
</div>
<div class="master-wrap box-shadow">
	<!-- Main container -->
	<div class="container">
		<!-- Left nav -->
		<?php include Kohana::find_file('views', 'admin/component/menu'); ?>
		<div class="twelve columns">
			<div class="pagetitle"><h2><?php echo $section; ?></h2></div>
			<?php echo $content; ?>
		</div>
	</div>
</div>

<?php echo $footer; ?>