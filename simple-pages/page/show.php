<!-- Custom SimplePages layout -->
<?php
$bodyclass = 'page simple-page';
if ($is_home_page):
    $bodyclass .= ' simple-page-home';
endif;

echo head(array(
    'title' => metadata('simple_pages_page', 'title'),
    'bodyclass' => $bodyclass,
    'bodyid' => metadata('simple_pages_page', 'slug')
));
?>

<div class="box container">
                    <?php if (!$is_home_page): ?>
         <p id="simple-pages-breadcrumbs"><?php echo simple_pages_display_breadcrumbs(); ?></p>  
                    <header>
                        <h1><?php echo metadata('simple_pages_page', 'title'); ?></h1>
                    </header>
                         <?php endif; ?>
                             <p><?php
                                    $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
                                    echo $this->shortcodes($text);
                                    ?></p>
           </div><!-- end container -->
       </div>

<?php echo foot(); ?>
