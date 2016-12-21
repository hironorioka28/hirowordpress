<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>hirowordpress</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
<?php wp_head(); ?>
</head>
<body class="page">
  <section class="page__wrapper">
    <div class="page__header">
      <header class="header">
        <h1 class="header__title">hirowordpress</h1>
      </header>
    </div>
    <div class="page__contents">
      <section class="update">
        <h2 class="update__title">RECENT UPDATE</h2>
        <div class="update__list">
          <?php query_posts('posts_per_page=5'); ?>
          <ul class="updateList">
            <?php while (have_posts()) : the_post(); ?>
              <li class="updateList__item">
                <a class="updateList__link" href="<?php the_permalink(); ?>">
                  <div class="updateList__imgWrapper" style="background-image:url(http://res.cloudinary.com/hiro28/image/upload/v1482243634/IMG_2089_pl0myg.jpg)"></div>
                  <div class="updateList__titleWrapper">
                    <h3 class="updateList__title"><?php the_title(); ?></h3>
                    <p class="updateList__date"><date><?php the_time('Y/m/d H:i'); ?></date></p>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        </div><!-- /.update__list -->
        <a class="update__more" href="#">MORE</a>
      </section>
    </div><!-- /.page__contents -->
    <div class="page__footer">
      <footer class="footer">
        <p class="footer__text">&copy; hirowordpress</p>
      </footer>
    </div>
  </section><!-- /.page__wrapper -->
  <?php wp_footer(); ?>
</body>
</html>
