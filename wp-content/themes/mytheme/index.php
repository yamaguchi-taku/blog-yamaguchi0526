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
    <div class="article">
      <div class="article__thumbnail red"></div>
      <time datetime="2025-07-31">2025年7月31日</time>
      <p class="article__title">タイトル</p>
      <span class="article_tag">タグ</span>
    </div>
    <div class="article">
      <div class="article__thumbnail blue"></div>
      <time datetime="2025-07-31">2025年7月31日</time>
      <p class="article__title">タイトル</p>
      <span class="article_tag">タグ</span>
    </div>
    <div class="article">
      <div class="article__thumbnail green"></div>
      <time datetime="2025-07-31">2025年7月31日</time>
      <p class="article__title">タイトル</p>
      <span class="article_tag">タグ</span>
    </div>
  </div>
  <div class="column">
     <div class="column__thumbnail red"></div>
     <div class="column__date">  
        <time datetime="2025-08-07">2025年8月7日</time>
        <p class="column__title">タイトル</p>
        <span class="column_tag">タグ</span>
     </div>
      </div>
     <div class="column">
       <div class="column__thumbnail blue"></div>
       <div class="column__date">  
          <time datetime="2025-08-07">2025年8月7日</time>
          <p class="column__title">タイトル</p>
          <span class="column_tag">タグ</span>
      </div>
     </div>
      <div class="column">
        <div class="column__thumbnail green"></div>
        <div class="column__date">  
           <time datetime="2025-08-07">2025年8月7日</time>
           <p class="column__title">タイトル</p>
           <span class="column_tag">タグ</span>
      </div>
     </div>
    
     <?php if ( have_posts() ) : ?>
    <ul>
      <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">

           <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('thumbnail'); // ← サムネイル表示（サイズ指定可） ?>
          <?php endif; ?>
            
          <?php the_title(); ?></a>
          <p><?php the_excerpt(); ?></p>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <p>記事が見つかりませんでした。</p>
  <?php endif; ?>

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
