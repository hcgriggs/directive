<?php
    $pageTitle = __('Browse Items');
    echo head(array('title'=>$pageTitle, 'bodyclass'=>'items tags'));
?>

	<div class="box container">
		<p><a href="<?php echo WEB_ROOT; ?>">Home</a> > Browse Items > Tags</p>
		<header>
			<h2><?php echo $pageTitle; ?></h2>
			<p>Browse all tags</p>
		</header>
		
		<section>
		    <?php $subnav = public_nav_items(); echo $subnav->setUlClass('nav nav-pills'); ?>
		    <hr>

		    <?php echo tag_cloud($tags, 'items/browse'); ?>
		</section>
	</div>
</div>
<?php echo foot(); ?>
