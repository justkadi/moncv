<h3>Langues</h3>
<?php
    $languesList = new WP_Query([
        'post_type' => 'langues',
        'posts_per_page' => -1
    ]);
?>
<ul>
    <?php while ($languesList->have_posts()) : $languesList->the_post(); ?>
        <li><?php the_title(); ?></li>
    <?php endwhile; ?>
</ul>