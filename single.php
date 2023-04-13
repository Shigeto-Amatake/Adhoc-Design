<?php get_header(); ?>

<main id="single" class="wrapper">
  <article>
        <!-- <div class="flex"> -->
        <h1 class="article-title"><?php the_title(); ?></h1>
      <!-- <p><?php the_time('Y/n/j'); ?></p> -->
    <!-- </div> -->
    <?php
    global $post;
    if (empty($post->post_excerpt)) : ?>
      <img src="<?php the_post_thumbnail_url('large'); ?>" class="mb20">
    <?php else : ?>
      <a href="<?php echo get_the_excerpt(); ?>" target="_blank" rel="noopener noreferrer">
        <img src="<?php the_post_thumbnail_url('large'); ?>" class="mb20">
      </a>
    <?php endif; ?>
    <!-- <a href="<?php echo get_the_excerpt(); ?>" target="_blank" rel="noopener noreferrer">
    <img src="<?php the_post_thumbnail_url('large'); ?>" class="mb20">
    </a> -->

    <div class="content">
      <?php the_content(); ?>
    </div>
  </article>

  <a class="link" href="<?php
                        $category = get_the_category();
                        echo  get_category_link($category[0]->term_id) ?>">一覧に戻る</a>
</main>

<?php get_footer(); ?>