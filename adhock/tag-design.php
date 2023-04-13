<?php get_header(); ?>

<main id="works" class="wrapper">
  <h1 class="page-title"><?php single_cat_title(); ?></h1>
  <div class="tab-group">
                    <div class="tab"><a href="<?php echo esc_url(home_url('/category/works/')); ?>">All</a></div>
                    <div class="tab"><a href="<?php echo esc_url(home_url('/tag/hp/')); ?>">Website</a></div>
                    <div class="tab active">Design</div>
                </div>

  
  <?php if (have_posts()) : ?>
    <ul class="list">
      <?php while (have_posts()) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url('full'); ?>" class="line" alt="">
          </a>
          <p class="title"><?php the_title(); ?></p>

        </li>
      <?php endwhile; ?>
    </ul>
    <div class="pagenation">
      <?php
      $args = array(
        'mid_size' => 1,
        'prev_text' => '&lt;&lt;Back',
        'next_text' => 'Next&gt;&gt;',
        'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
    <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>