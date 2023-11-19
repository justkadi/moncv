<h3>Competences</h3>
<?php
    $competencesList = new WP_Query([
        'post_type' => 'competences',
        'posts_per_page' => -1
    ]);
?>
<ul>
    <?php while ($competencesList->have_posts()) : $competencesList->the_post(); ?>
        <li><?php the_title(); ?></li>
    <?php endwhile; ?>
</ul>