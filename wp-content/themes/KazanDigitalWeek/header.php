<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Описание сайта">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Главная | Kazan Digital Week</title>
    <?php wp_head();?>
  </head>
  <body class="page-home">
    
    <?php
      $lang = carbon_lang() === "_ru" ? "EN" : "RU";
      $linkLang = carbon_lang() === "_ru" ? get_site_url() . '/en/' : get_site_url();
    ?>

    <div class="preloder"><img class="preloder__img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>" alt=""></div>
    <div class="menu fix-blocks">
      <div class="menu__container site-container grid-container">
        <div class="menu__container-block">
          <ul class="menu__list">
            <li class="menu__item"><a class="menu__link" href="#about"><?php echo carbon_get_theme_option( 'forum'.carbon_lang() );?></a></li>
            <li class="menu__item"><a class="menu__link" href="#participants"><?php echo carbon_get_theme_option( 'spekers'.carbon_lang() );?></a></li>
            <li class="menu__item"><a class="menu__link" href="#programm"><?php echo carbon_get_theme_option( 'programm'.carbon_lang() );?></a></li>
            <li class="menu__item"><a class="menu__link" href="#exposure"><?php echo carbon_get_theme_option( 'exposure'.carbon_lang() );?></a></li>
            <li class="menu__item"><a class="menu__link" href="#partners"><?php echo carbon_get_theme_option( 'partners'.carbon_lang() );?></a></li>
            <li class="menu__item"><a class="menu__link" href="#map"><?php echo carbon_get_theme_option( 'map'.carbon_lang() );?></a></li>
          </ul>
        </div>
        <div class="menu__container-block">
          <div class="menu__content-block">
            <p class="menu__legend"><?php echo carbon_get_theme_option( 'information'.carbon_lang() );?></p>
              <?
                  $site_links = carbon_get_theme_option( 'site_links'.carbon_lang() );
                  
                  foreach ($site_links as $link) :
              ?>
                <a class="menu__useful-link" target="_blank" href="<?php echo $link["file"]?>"><?php echo $link["name"]?></a>
              <?php endforeach; ?>
          </div>
          <div class="menu__content-block">
            <p class="menu__legend"><?php echo carbon_get_theme_option( 'contacts'.carbon_lang() );?></p>
            <p class="map__link">
              <svg class="icon icon-marker map__link-icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#marker"></use>
              </svg><?php echo $GLOBALS['kdw']['address']; ?>
            </p><a class="map__link" href="tel:<?php echo $GLOBALS['kdw']['phone_digits']; ?>">
              <svg class="icon icon-tel map__link-icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#tel"></use>
              </svg><?php echo $GLOBALS['kdw']['phone']; ?><span><?php echo carbon_get_theme_option( 'name'.carbon_lang() );?></span></a>
              <a class="map__link" href="mailto:<?php echo $GLOBALS['kdw']['email']; ?>">
              <svg class="icon icon-mail map__link-icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#mail"></use>
              </svg><?php echo $GLOBALS['kdw']['email']; ?></a>
            <ul class="socials menu__socials">
              <li class="socials__item"><a class="socials__link" target="_blank" href="<?php echo $GLOBALS['kdw']['vk']; ?>">
                  <svg class="icon icon-vk socials__link-icon" width="22" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#vk"></use>
                  </svg></a></li>
              <li class="socials__item"><a class="socials__link" target="_blank" href="<?php echo $GLOBALS['kdw']['tg']; ?>">
                  <svg class="icon icon-tg socials__link-icon" width="20" height="16">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#tg"></use>
                  </svg></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="page-wrapper">
      <header class="header fix-blocks">
        <div class="site-container header__container">
          <a class="header__logo" href="<?php echo get_home_url(); ?>">
            <img class="header__logo-img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo'.carbon_lang() )); ?>" alt="Логотип Kazan Digital Week 2022">
          </a>
          <img class="header__logo-rivc" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo2'.carbon_lang() )); ?>" alt="Логотип компании РИВЦ">
          <a class="header__link" href="#programm"><?php echo carbon_get_theme_option( 'programm'.carbon_lang() );?></a>
          <a class="header__link" href="#exposure"><?php echo carbon_get_theme_option( 'exposure'.carbon_lang() );?></a>
          <a class="header__link _lang-version" href="<?php echo $linkLang; ?>"><?php echo $lang; ?></a>
          <button class="button-reset button" data-path="registration">
            <span class="_border-top"></span>
            <span class="_border-bottom"></span>
            <?php echo $GLOBALS['kdw']['button_reg']; ?>
          </button>
          <button class="button-reset header__burger-btn js-open-menu">
            <span></span><span></span><span></span>
          </button>
        </div>
      </header>
      <main class="page-main main">
