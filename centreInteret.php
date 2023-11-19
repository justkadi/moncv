<h3>Centres d'Intérêt</h3>
<?php
    $interetList = new WP_Query([
        'post_type' => 'interet',
        'posts_per_page' => -1
    ]);
?>
<ul>
    <?php while ($interetList->have_posts()) : $interetList->the_post(); ?>
        <li><?php the_title(); ?></li>
    <?php endwhile; ?>
</ul>