<?php get_header(); ?>

<main>
    <div id="mainvisual">
        <picture>
            <source media="(max-width: 600px)" srcset="<?php echo esc_url(get_theme_file_uri('img/mainvisual-sp.jpg')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual-pc.jpg')); ?>" alt="テキストテキストテキスト">
        </picture>
    </div>

    <div class="wrapper">
        <section id="service">
            <h2 class="sec-title">Service</h2>
            <ul class="bgimg">
                <li>
                    <h3>システム開発</h3>
                    <p>SYSTEM</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('img/icon1.png')); ?>" alt="">
                    <p class="left-p">何でも作りますから任せてください！<br>と言いたいところですが私たちはそんな思い切ったことは言いません。<br>今の時代、周りを見渡せば安価で品質の高いクラウドサービスやAPIがいくらでも転がっています。<br>それらを効率的に組み合わせてコーディネートし、本当に開発が必要な部分だけをご提案させていただきます。</p>
                </li>
                <li>
                    <h3>デザイン</h3>
                    <p>DESIGN</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('img/icon2.png')); ?>" alt="">
                    <p class="left-p">あなたのビジネスに本当に必要なデザインとはどのようなデザインでしょうか。<br>デザインは手段に過ぎません。<br>大切なのはあなたのビジネスを最高にCoolに表現できるかどうかです！<br>設計段階が最も重要と考えておりますので是非一緒に考えてみませんか？</p>
                </li>
                <li>
                    <h3>マーケティング</h3>
                    <p>MARKETING</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('img/icon3.png')); ?>" alt="">
                    <p class="left-p">せっかく素晴らしいサービス、製品を出したのにイマイチ反響が無い。<br>そんなお悩みありませんか？<br>大丈夫です。ほんの少し工夫するだけで、まるでドミノを倒すようにあなたのビジネスは波状に広がっていきます。<br>最初のドミノをキックするお手伝いを私たちにさせて下さい！</p>
                </li>
            </ul>

        </section>

        <section id="works">
            <h2 class="sec-title">Works</h2>

            <div class="tab-wrap">
                <div class="tab-group">
                    <div class="tab is-active">All</div>
                    <div class="tab">Website</div>
                    <div class="tab">Design</div>
                </div>
                <div class="panel-group">
                    <div class="panel is-show">
                    <ul>
                        <?php
                        $args = array(
                            'posts_per_page' => 9,
                            'category_name' => 'works'
                        );
                        ?>
                        <?php $posts = get_posts($args); ?>
                        <?php foreach ($posts as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <div class="line">
                                <a href="<?php the_permalink(); ?>">
                                    <li><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></li>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <a class="link" href="<?php echo esc_url(home_url('/category/works/')); ?>">See More</a>
                    </div>
                
                <div class="panel">
                    <ul>
                        <?php
                        $args = array(
                            'posts_per_page' => 9,
                            'tag' => 'hp'
                        );
                        ?>
                        <?php $posts = get_posts($args); ?>
                        <?php foreach ($posts as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <div class="line">
                                <a href="<?php the_permalink(); ?>">
                                    <li><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></li>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <a class="link" href="<?php echo esc_url(home_url('/tag/hp/')); ?>">See More</a>
                </div>

                <div class="panel">
                    <ul>
                        <?php
                        $args = array(
                            'posts_per_page' => 9,
                            'tag' => 'design'
                        );
                        ?>
                        <?php $posts = get_posts($args); ?>
                        <?php foreach ($posts as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <div class="line">
                                <a href="<?php the_permalink(); ?>">
                                    <li><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></li>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <a class="link" href="<?php echo esc_url(home_url('/tag/design/')); ?>">See More</a>
                </div>
                </div>
            </div>
        </section>



        <section id="blog">
            <h2 class="sec-title">Blog</h2>
            <ul>
                <?php
                $args = array(
                    'posts_per_page' => 9,
                    'category_name' => 'blog'
                );
                ?>
                <?php $posts = get_posts($args); ?>
                <?php foreach ($posts as $post) : ?>
                    <?php setup_postdata($post); ?>
                    <div class="line">
                        <a href="<?php the_permalink(); ?>">
                            <li><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></li>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <a class="link" href="<?php echo esc_url(home_url('/category/blog/')); ?>">See More</a>
        </section>
    </div>
</main>


<?php get_footer(); ?>