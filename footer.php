</div>  <!-- end .site-content -->
<footer class="site-footer">
    <div class="l-contain">
        <h3>Media Standards Trust</h3>
        <div class="l-stackable">
            

            <div class="l-item50">
                <p>The Media Standards Trust is an independent registered 
                    charity that fosters quality, transparency and accountability 
                    for the digital age. We develop digital tools, conduct research, organise debates and contribute to public policy.</p>
        
            </div>

            <div class="l-item50 footer-r">
                <p><a href="mailto:contact@mediastandardstrust.org">contact@mediastandardstrust.org</p>
            </div>

        </div>
        <div class="l-stackable">

            <div class="l-item50">

                <p>Registered charity number 1113680<br/>
                Company number 05514310</p>

                <?php wp_nav_menu( array(
            'theme_location'=>'footer-menu',
            'depth'=>1,
            'container'=>'nav'
            ) ); ?>

        <div class="copyright">&copy; Media Standards Trust <?php echo date('Y') ?>. Design by <a href="http://www.double-sided.com/">Double Sided</a></div>

            </div>

            <div class="l-item50 footer-r">                
                <p>+44 (0)203 773 1362<br/>
                <a href="http://twitter.com/newsmatters">@NewsMatters</a></p>
                <ul class="social">
                    <li><a href="https://twitter.com/NewsMatters" class="socialicon socialicon-twitter">Twitter</a></li>
                    <li><a href="https://www.facebook.com/pages/Media-Standards-Trust/152015511494934" class="socialicon socialicon-facebook">Facebook</a></li>
                    <!-- <li><a href="" class="socialicon socialicon-googleplus">Google+</a></li> 
                    <li><a href="" class="socialicon socialicon-rss">RSS</a></li>-->
                </ul>
            </div>
 
        </div>

        
    </div> <!-- end .l-contain -->
</footer>
<?php wp_footer(); ?>
<script>
    (function() {
        if(!document.addEventListener) {
            // no support? just leave it with plain menus
            return;
        }
        // turn header menu into fancy hotdog button menu
        var container = document.getElementById('site-nav-hotdog');
        var menu = document.getElementById('menu-headermenu');
        var btn = document.getElementById('site-hotdog-btn');

        // show button, convert menu to fancy kind and hide it
        btn.className = btn.className.replace(/\bis-hidden\b/i,'');
        container.className += " is-hidden is-fancy";
        menu.className += " menu-fancy";

        var menuOff = function() {
            btn.className = btn.className.replace(/\bis-active\b/i,'');
            container.className += " is-hidden";
            document.removeEventListener("click",menuOff);
        };
        var menuOn = function() {
            // turn on
            btn.className += " is-active";
            container.className = container.className.replace(/\bis-hidden\b/i,'');
            document.addEventListener("click",menuOff);
        };

        menu.addEventListener("click",function(event) { event.stopPropagation(); });
        btn.addEventListener("click", function(event) {
            event.stopPropagation(); 
            if( btn.className.indexOf('is-active') == -1 ) {
                menuOn();
            } else {
                // turn off
                menuOff();
            }
        });

    })();
</script>
<!--[if lt IE 9]>
<script src="<?= get_template_directory_uri(); ?>/polyfill/rem.min.js"></script>
<![endif]-->
</body>
</html>

