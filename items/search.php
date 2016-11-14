<?php
    $pageTitle = __('Search Items');
    echo head(array('title' => $pageTitle, 'bodyclass' => 'items advanced-search'));
?>
	<div class="box container">
		<section>

    <h1><?php echo $pageTitle; ?></h1>
    <?php $subnav = public_nav_items(); echo $subnav->setUlClass('nav nav-pills'); ?>
    <hr>

    <?php echo $this->partial('items/search-form.php', array('formAttributes' => array('id'=>'advanced-search-form'))); ?>
		</section>
	</div>
</div>
<?php echo foot(); ?>
