<footer>
    <?php wp_footer(); ?>
</footer>

<!-- Script for smooth scrolling -->
<script>
jQuery(document).ready(function($) {
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500, 'linear');
    });
});
</script>
</body>
</html>
