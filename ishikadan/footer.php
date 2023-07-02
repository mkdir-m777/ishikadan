<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/AOS.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flatpickr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/humburger.js"></script>

<?php if (is_home()) { ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<?php } else {
} ?>



<?php
wp_footer();
?>
</body>

</html>