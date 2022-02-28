<footer>
        <div class="grey-layout"></div>
        <div class="footer">
            <div class="footer-logos">
                <div class="logo">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/Logo1.png" alt="logo">
                </div>
                <img class="samokat" src="<?php bloginfo('template_url') ?>/assets/images/Vector.svg" alt="samokat">
            </div>
            <p><?php the_field('address') ?></p>
        </div>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>