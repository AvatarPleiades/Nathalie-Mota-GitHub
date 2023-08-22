    </main>
    <footer>
    <?php 
        wp_nav_menu ([
        'theme_location' => 'footer',
        'container' => false,
        'container_aria_label' => 'menu du footer',
        ])
    ?>
    </footer>
<?php get_template_part('/templates-part/modale-contact'); ?>
<?php get_template_part('/templates-part/lightbox'); ?>
<?php wp_footer() ?>

</body>
</html>