<!-- Footer won't show if you navigate to a neatline exhibit -->
<?php if (is_current_url('/neatline/show/')): ?>

<!-- Footer shows on all other pages -->
<?php else: ?>
      <!-- Footer -->
      <div id="footer">
        <div class="container 75%">

          <header class="major last">
            <h2>Questions or comments?</h2>
          </header>

          <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor
          orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>

          <form method="post" action="#">
            <div class="row">
              <div class="6u 12u(mobilep)">
                <input type="text" name="name" placeholder="Name" />
              </div>
              <div class="6u 12u(mobilep)">
                <input type="email" name="email" placeholder="Email" />
              </div>
            </div>
            <div class="row">
              <div class="12u">
                <textarea name="message" placeholder="Message" rows="6"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="12u">
                <ul class="actions">
                  <li><input type="submit" value="Send Message" /></li>
                </ul>
              </div>
            </div>
          </form>

          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
          </ul>

          <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>

        </div>
      </div>
<?php endif ?>
</body>
</html>
