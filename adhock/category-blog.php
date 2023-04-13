<?php get_header(); ?>

<main id="blog" class="wrapper">
    <h1 class="page-title"><?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <ul class="list">
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="flex">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <p><?php the_time('Y/n/j'); ?></p>
                        </div>                   
                        <img src="<?php the_post_thumbnail_url('full'); ?>" class="line" alt="">
                    </a>
                </li>
            <?php endwhile; ?>

        </ul>
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
</main>

<?php get_footer(); ?>