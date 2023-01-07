<footer>
        <div class="container mb-5">
            <div class="row">
                <?php if ( is_active_sidebar( 'owd-footer-widget-1' )): ?>
                    <?php dynamic_sidebar( 'owd-footer-widget-1' ); ?>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'owd-footer-widget-2' )): ?>
                    <?php dynamic_sidebar( 'owd-footer-widget-2' ); ?>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'owd-footer-widget-3' )): ?>
                    <?php dynamic_sidebar( 'owd-footer-widget-3' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>