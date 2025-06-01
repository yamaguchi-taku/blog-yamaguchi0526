<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>

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
</body>
</html>
