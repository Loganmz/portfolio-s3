<footer class="site-footer">
    <div class="footer-content">
        <nav class="footer-nav">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
                </a>
            </div>
        </nav>
        <div class="footer-info">
            <p>&copy; <?php echo date("Y"); ?> Logan Martinez. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
