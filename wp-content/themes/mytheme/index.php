<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- <title><?php bloginfo('name'); ?></title> -->
  <title>testtitle</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php
   wp_head();
   ?>
</head>
<body>
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <div class="menu">
      
      <a href="/" class="menu-link">top</a>
      <a href="/blog" class="menu-link">blog</a>
    </div>
  </header>

  <p><?php bloginfo('description'); ?></p>
 <div class="square red"></div>
  <div class="square blue"></div>
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_title('<h2>', '</h2>');
      the_content();
    endwhile;
  else :
    echo '<p>記事がありません。</p>';
  endif;
  ?>
  <!-- 正方形を横に３つ並べる方法 -->
  <div class="container">
    <div class="square red"></div>
    <div class="square green"></div>
    <div class="square blue"></div>
  </div>
  <?php wp_footer();?>

 <footer>
  <h2><?php bloginfo('name'); ?></h2>
    <div class="footer__menu">
      
      <a href="/" class="footer__menu-link">top</a>
      <a href="/blog" class="footer__menu-link">blog</a>
    </div>
 </footer>
</body>
</html>
