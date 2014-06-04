</div>  <!-- end .site-content -->
<footer class="site-footer">
    <div class="l-contain">
        <h3>Media Standards Trust</h3>
        <div class="l-stackable">
            <div class="l-item50">
                <p>The Media Standards Trust is an independent registered charity that fosters quality, transparency and accountability for the digital age. We develop digital tools, conduct research, organise debates and contribute to public policy.</p>
                <p>
                Registered charity number 1113680<br/>
                Company number 05514310    
                </p>
            </div>

            <div class="l-item25">
                King's College London<br/>
                Virginia Woolf Building<br/>
                22 Kingsway<br/>
                London WC2B 6NR<br/>
            </div>

            <div class="l-item25">
                +44 20 7848 7950
            </div>
        </div>

        <?php wp_nav_menu( array(
            'theme_location'=>'footer-menu',
            'depth'=>1,
            'container'=>'nav'
            ) ); ?>

        <div class="copyright">&copy; Media Standards Trust 2014. Design by <a href="http://www.double-sided.com/">Double Sided</a></div>
    </div> <!-- end .l-contain -->
</footer>
<?php wp_footer(); ?>
<script>
    (function() {
        // turn header menu into fancy hotdog button menu
        var container = document.getElementById('site-nav-hotdog');
        var menu = document.getElementById('menu-headermenu');
        var btn = document.getElementById('site-hotdog-btn');

        // show button, convert menu to fancy kind and hide it
        btn.className = btn.className.replace(/\bis-hidden\b/i,'');
        container.className += " is-hidden";
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
</body>
</html>

