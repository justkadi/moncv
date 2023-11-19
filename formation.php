<h3>Formations</h3>
<ul>
  <?php
  $formationsList = new WP_Query([
      'post_type' => 'formations',
      'posts_per_page' => -1
  ]);
  while ( $formationsList->have_posts() ) : $formationsList->the_post();
      $start_date = get_post_meta(get_the_ID(), 'start_date', true);
      $end_date = get_post_meta(get_the_ID(), 'end_date', true);
      ?>
      <li>
          <?php if($start_date && $end_date): ?>
              <?php echo $start_date; ?> - <?php echo $end_date; ?> : 
          <?php endif; ?>
          <?php the_title(); ?>
      </li>
  <?php endwhile; ?>
</ul>