<?php echo head(array('bodyid'=>'home')); ?>

                <header class="major container 75%">
                    <h2>We conduct experiments that
                    <br />
                    may or may not seriously
                    <br />
                    break the universe</h2>
                    
                    <p>Tellus erat mauris ipsum fermentum<br />
                    etiam vivamus nunc nibh morbi.</p>
                    
                </header>

                <div class="box alt container">
                    <section class="feature left">
                        <a href="#" class="image icon fa-signal"><img src="<?php echo img('pic01.jpg'); ?>" alt="" /></a>
                        <div class="content">
                            <h3>The First Thing</h3>
                            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
                        </div>
                    </section>
                    <section class="feature right">
                        <a href="#" class="image icon fa-code"><img src="<?php echo img('pic02.jpg'); ?>" alt="" /></a>
                        <div class="content">
                            <h3>The Second Thing</h3>
                            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
                        </div>
                    </section>
                    <section class="feature left">
                        <a href="#" class="image icon fa-mobile"><img src="<?php echo img('pic03.jpg'); ?>" alt="" /></a>
                        <div class="content">
                            <h3>The Third Thing</h3>
                            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
                        </div>
                    </section>
                </div>

                    <footer class="major container 75%">
                        <h3>Get shady with science</h3>
                        <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Join our crew</a></li>
                        </ul>
                </footer>
            </div>
        <?php fire_plugin_hook('public_home', array('view' => $this)); ?>
    <?php echo foot(); ?>
