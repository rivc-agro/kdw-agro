<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
  ->show_on_page(6)

  ->add_tab('Первый экран', [
    Field::make('rich_text', 'hero_text_left' . carbon_lang(), 'Текст слева')
      ->set_width(50),
    Field::make('rich_text', 'hero_text_right' . carbon_lang(), 'Текст справа')
      ->set_width(50),
    Field::make('image', 'hero_img_mobile' . carbon_lang(), 'Изображение для мобилки')
      ->set_width(50),
    Field::make('file', 'hero_vid' . carbon_lang(), 'Видео на фон')
      ->set_value_type('url')
  ])

  ->add_tab('Второй экран(О форуме)', [
    Field::make('image', 'numbers_img' . carbon_lang(), 'Изображение на фоне'),
    Field::make('complex', 'numbers_list' . carbon_lang(), 'Инофрмация о форуме(Цифры)')
      ->set_max(6)
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'title', 'Заголовок')->set_width(50),
        Field::make('text', 'descr', 'Текст-описание')->set_width(50),
      ]),
  ])

  ->add_tab('Третий экран(Форум для)', [
    Field::make('text', 'forum_title' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'forum_list' . carbon_lang(), 'Для кого форум')
      ->set_max(6)
      ->add_fields([
        Field::make('text', 'descr', 'Текст-описание'),
      ]),
  ])

  ->add_tab('Четвертый экран(Участники)', [
    Field::make('text', 'participants_title' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'participants_list' . carbon_lang(), 'Список')
      ->add_fields([
        Field::make('image', 'img', 'Изображение'),
        Field::make('image', 'img_mobile', 'Изображение в мобилке'),
        Field::make('text', 'name', 'Имя'),
        Field::make('text', 'position', 'Должность'),
      ]),
  ])

  ->add_tab('Пятый экран(Спикеры)', [
    Field::make('text', 'participants_title2' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'participants_list2' . carbon_lang(), 'Список')
      ->add_fields([
        Field::make('image', 'img', 'Изображение'),
        Field::make('image', 'img_mobile', 'Изображение в мобилке'),
        Field::make('text', 'name', 'Имя'),
        Field::make('text', 'position', 'Должность'),
        Field::make('text', 'link', 'Ссылка на сайт компании'),
      ]),
  ])

  ->add_tab('Шестой экран(Программа)', [
    Field::make('text', 'prorgamm_heading' . carbon_lang(), 'Заголовок'),
    Field::make('rich_text', 'prorgamm_heading_text' . carbon_lang(), 'Текст-описание под заголовком'),
    Field::make('rich_text', 'prorgamm_descr' . carbon_lang(), 'Темы:'),
    Field::make('text', 'prorgamm_btn_txt' . carbon_lang(), 'Текст кнопки'),
    Field::make('file', 'prorgamm_file' . carbon_lang(), 'Файл')
      ->set_value_type('url')->set_width(50),
  ])

  ->add_tab('Седьмой экран(Галлерея)', [
    Field::make('media_gallery', 'gallery_imgs' . carbon_lang(), 'Изображения для слайдера')
      ->set_type(['image']),
  ])

  ->add_tab('Восьмой экран(Экспозиция)', [
    Field::make('text', 'exposure_heading' . carbon_lang(), 'Заголовок'),
    Field::make('rich_text', 'exposure_heading_txt' . carbon_lang(), 'Заголовок'),
    Field::make('media_gallery', 'exposure_imgs' . carbon_lang(), 'Изображения для слайдера')
      ->set_type(['image']),
    Field::make('complex', 'exposure_links' . carbon_lang(), 'Ссылки')
      ->add_fields([
        Field::make('text', 'name', 'Имя')->set_width(50),
        Field::make('file', 'file', 'Файл')
          ->set_value_type('url')->set_width(50),
      ]),
  ])

  ->add_tab('Девятый экран(цифры)', [
    Field::make('complex', 'feautures' . carbon_lang(), 'Цифры')
      ->set_max(6)
      ->add_fields([
        Field::make('text', 'name', 'Заголовок')->set_width(50),
        Field::make('text', 'txt', 'Текст')->set_width(50),
      ]),
  ])

  ->add_tab('Десятый экран(Пакеты)', [
    Field::make('complex', 'pakages' . carbon_lang(), 'Пакеты')
      ->set_max(4)
      ->add_fields([
        Field::make('text', 'name', 'Заголовок')->set_width(50),
        Field::make('rich_text', 'txt', 'Текст')->set_width(50),
      ]),
  ])

  ->add_tab('Одиннадцатый экран(Партнеры)', [
    Field::make('text', 'partners_heading' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'partners' . carbon_lang(), 'Партнеры')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'txt', 'Ссылка на сайт')->set_width(50),
      ]),
  ])

  ->add_tab('Двенадцатый экран(ИНФОРМАЦИОННЫЕ ПАРТНЕРЫ)', [
    Field::make('text', 'partners2_heading' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'partners2' . carbon_lang(), 'ИНФОРМАЦИОННЫЕ ПАРТНЕРЫ')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'txt', 'Ссылка на сайт')->set_width(50),
      ]),
  ])

  ->add_tab('Одиннадцатый экран(СТРАТЕГИЧЕСКИЕ ОТРАСЛЕВЫЕ ПАРТНЕРЫ)', [
    Field::make('text', 'partners3_heading' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'partners3' . carbon_lang(), 'СТРАТЕГИЧЕСКИЕ ОТРАСЛЕВЫЕ ПАРТНЕРЫ')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'txt', 'Ссылка на сайт')->set_width(50),
      ]),
  ]);

Container::make('post_meta', 'Дополнительные поля')
  ->show_on_page(85)

  ->add_tab('Первый экран', [
    Field::make('text', 'hero_text_left' . carbon_lang(), 'Текст слева')
      ->set_width(50),
    Field::make('text', 'hero_text_right' . carbon_lang(), 'Текст справа')
      ->set_width(50),
    Field::make('image', 'hero_img_mobile' . carbon_lang(), 'Изображение для мобилки')
      ->set_width(50),
    Field::make('file', 'hero_vid' . carbon_lang(), 'Видео на фон')
      ->set_value_type('url')
  ])

  ->add_tab('Второй экран(О форуме)', [
    Field::make('image', 'numbers_img' . carbon_lang(), 'Изображение на фоне'),
    Field::make('complex', 'numbers_list' . carbon_lang(), 'Инофрмация о форуме(Цифры)')
      ->set_max(6)
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'title', 'Заголовок')->set_width(50),
        Field::make('text', 'descr', 'Текст-описание')->set_width(50),
      ]),
  ])

  ->add_tab('Третий экран(Форум для)', [
    Field::make('text', 'forum_title' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'forum_list' . carbon_lang(), 'Для кого форум')
      ->set_max(6)
      ->add_fields([
        Field::make('text', 'descr', 'Текст-описание'),
      ]),
  ])

  ->add_tab('Четвертый экран(Участники)', [
    Field::make('text', 'participants_title' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'participants_list' . carbon_lang(), 'Список')
      ->add_fields([
        Field::make('image', 'img', 'Изображение'),
        Field::make('image', 'img_mobile', 'Изображение в мобилке'),
        Field::make('text', 'name', 'Имя'),
        Field::make('text', 'position', 'Должность'),
      ]),
  ])

  ->add_tab('Пятый экран(Спикеры)', [
    Field::make('text', 'participants_title2' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'participants_list2' . carbon_lang(), 'Список')
      ->add_fields([
        Field::make('image', 'img', 'Изображение'),
        Field::make('image', 'img_mobile', 'Изображение в мобилке'),
        Field::make('text', 'name', 'Имя'),
        Field::make('text', 'position', 'Должность'),
        Field::make('text', 'link', 'Ссылка на сайт компании'),
      ]),
  ])

  ->add_tab('Шестой экран(Программа)', [
    Field::make('text', 'prorgamm_heading' . carbon_lang(), 'Заголовок'),
    Field::make('rich_text', 'prorgamm_heading_text' . carbon_lang(), 'Текст-описание под заголовком'),
    Field::make('rich_text', 'prorgamm_descr' . carbon_lang(), 'Темы:'),
    Field::make('text', 'prorgamm_btn_txt' . carbon_lang(), 'Текст кнопки'),
  ])

  ->add_tab('Седьмой экран(Галлерея)', [
    Field::make('media_gallery', 'gallery_imgs' . carbon_lang(), 'Изображения для слайдера')
      ->set_type(['image']),
  ])

  ->add_tab('Восьмой экран(Экспозиция)', [
    Field::make('text', 'exposure_heading' . carbon_lang(), 'Заголовок'),
    Field::make('rich_text', 'exposure_heading_txt' . carbon_lang(), 'Заголовок'),
    Field::make('media_gallery', 'exposure_imgs' . carbon_lang(), 'Изображения для слайдера')
      ->set_type(['image']),
    Field::make('complex', 'exposure_links' . carbon_lang(), 'Ссылки')
      ->add_fields([
        Field::make('text', 'name', 'Имя')->set_width(50),
        Field::make('file', 'file', 'Файл')
          ->set_value_type('url')->set_width(50),
      ]),
  ])

  ->add_tab('Девятый экран(цифры)', [
    Field::make('complex', 'feautures' . carbon_lang(), 'Цифры')
      ->set_max(6)
      ->add_fields([
        Field::make('text', 'name', 'Заголовок')->set_width(50),
        Field::make('text', 'txt', 'Текст')->set_width(50),
      ]),
  ])

  ->add_tab('Десятый экран(Пакеты)', [
    Field::make('complex', 'pakages' . carbon_lang(), 'Пакеты')
      ->set_max(4)
      ->add_fields([
        Field::make('text', 'name', 'Заголовок')->set_width(50),
        Field::make('rich_text', 'txt', 'Текст')->set_width(50),
      ]),
  ])

  ->add_tab('Одиннадцатый экран(Партнеры)', [
    Field::make('text', 'partners_heading' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'partners' . carbon_lang(), 'Партнеры')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'txt', 'Ссылка на сайт')->set_width(50),
      ]),
  ])

  ->add_tab('Двенадцатый экран(ИНФОРМАЦИОННЫЕ ПАРТНЕРЫ)', [
    Field::make('text', 'partners2_heading' . carbon_lang(), 'Заголовок'),
    Field::make('complex', 'partners2' . carbon_lang(), 'ИНФОРМАЦИОННЫЕ ПАРТНЕРЫ')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'txt', 'Ссылка на сайт')->set_width(50),
      ]),
  ]);
