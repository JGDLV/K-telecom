<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <meta name="description" content="Главная страница">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__inner"><a class="logo" href="/"><img class="logo__image" src="<?php the_field('logo', 2); ?>" alt=""></a>
          <div class="menu-toggle"><i class="icon-toggle"><span></span><span></span><span></span></i></div>
        </div>
      </div>
    </header>
