<?php get_header(); ?>

<main id="page" class="wrapper">
  <article>
    <h1 class="page-title"><?php the_title(); ?></h1>

    <div class="content">
      <?php the_content(); ?>
    </div>
  </article>
</main>

<?php get_footer(); ?>