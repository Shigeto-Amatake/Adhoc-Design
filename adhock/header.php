<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&family=Noto+Serif+JP:wght@300;400&display=swap" rel="stylesheet">  <?php wp_head(); ?>
</head>

<body>

  <header id="header">
    <!--
    トップページの場合は、ロゴにh1タグを設定。
    その他のページの場合は、カテゴリータイトルやページタイトルにh1タグを使用するため、
    ロゴはdivタグを設定する。
    -->
    <?php $tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
    <<?php echo $tag; ?> class="site-title">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" class="logo">
      </a>
    </<?php echo $tag; ?>>
    <nav class="header-nav">
      <ul class="mb20">
        <li>
          <a href="https://www.instagram.com/" target="_blank">
            <img class="icon" src="<?php echo esc_url(get_theme_file_uri('img/icon-instagram.png')); ?>" alt="インスタグラム">
          </a>
        </li>
      </ul>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/blog/')); ?>">Blog</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class="site-wrapper">