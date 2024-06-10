<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h4>About Us</h4>
            <p>Description about your company.</p>
        </div>
        <div class="footer-section">
            <h4>Contact Me</h4>
            <p>+123 456 7890</p>
            <p>info@example.com</p>
        </div>
        <div class="footer-section">
            <h4>Follow</h4>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
        </div>
    </div>
    <p>&copy; <?php echo date('Y'); ?> Your Website. All rights reserved.</p>
    <?php wp_footer(); ?> <!-- Essential for certain WordPress functionality -->
</footer>

</body>
</html>

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