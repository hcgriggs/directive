<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo img('favicon.ico'); ?>" type="image/x-icon"/>
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
    queue_css_file(array('assets/css/main', 'assets/css/menu'));
    echo head_css();
    echo theme_header_background();
    ?>

    <!-- JavaScripts -->
    <?php 
    queue_js_file(array('assets/js/util','assets/js/skel.min','assets/js/main','assets/js/jquery.min'));
    queue_js_file(array('menu-js/util','menu-js/skel.min','menu-js/main','menu-js/jquery.min'));
    echo head_js(); 
    ?>
</head>

<!-- Begin php header options -->
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<!-- this is the neatline header -->
<?php if (is_current_url('/neatline/show/')): ?>

<!-- //// this is the index page header /// -->
<?php elseif (is_current_url('/')): ?>
    <!-- This is the menu, taken from HTML5Up's Phantom theme [https://html5up.net/phantom] -->
    <div id="head-wrapper">
    <!-- Header -->
        <header id="head-header">
            <div class="inner">          
                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div><!-- end div inner -->
        </header>
    <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
                <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="generic.html">Tempus etiam</a></li>
                    <li><a href="generic.html">Consequat dolor</a></li>
                    <li><a href="elements.html">Elements</a></li>
                </ul>
        </nav>
    </div><!-- end head-wrapper -->
   <!-- end menu -->

    <!-- Directive Header -->
    <div id="header">
        <span class="logo icon fa-paper-plane-o"></span>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <h1><?php echo link_to_home_page(theme_logo()); ?></h1>
            <p>A responsive HTML5 + CSS3 site template designed by <a href="http://html5up.net">HTML5 UP</a>
            <br />
            and released for free under the <a href="http://html5up.net/license">Creative Commons license</a>.
            </p>
    </div><!-- end div #header -->

    <!-- This starts the #main div necessary for index.php  -->
    <div id="main">
    <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>

    <!-- this is the non index.php header so that Directive header does not appear on all pages -->
    <?php else: ?>
        <!-- Wrapper -->
        <div id="head-wrapper">
            <!-- Header -->
            <header id="head-header">
                <div class="inner">
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>
                </div><!-- end div .inner -->
            </header><!-- end head-wrapper -->

            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                    <ul>
                        <li><a href="<?php echo WEB_ROOT; ?>">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="generic.html">Tempus etiam</a></li>
                        <li><a href="generic.html">Consequat dolor</a></li>
                        <li><a href="elements.html">Elements</a></li>
                    </ul>
            </nav>
        </div><!-- end head-wrapper -->

        <!-- Main -->
        <div id="main">

        <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
        
    <?php endif ?><!-- end php header options -->