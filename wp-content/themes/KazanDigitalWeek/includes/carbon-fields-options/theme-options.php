<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Основные поля')
  ->set_page_menu_position(4)
  ->set_icon('dashicons-image-filter')
  ->add_tab('Общие настройки', [
    Field::make('image', 'site_logo' . carbon_lang(), 'Логотип в шапке')->set_width(50),
    Field::make('image', 'site_logo2' . carbon_lang(), 'Логотип в шапке РИВЦ')->set_width(50),
    Field::make('text', 'head_kdw' . carbon_lang(), 'Куратор Kazan Digital Week')->set_width(50),
    Field::make('text', 'site_copyright' . carbon_lang(), 'Копирайт')->set_width(50),
    Field::make('complex', 'site_links' . carbon_lang(), 'Ссылки на материалы')
      ->add_fields([
        Field::make('text', 'name', 'Название')->set_width(50),
        Field::make('file', 'file', 'Файл')->set_value_type('url')->set_width(50),
      ]),
  ])

  ->add_tab('Контакты', [
    Field::make('text', 'site_phone', 'Телефон'),
    Field::make('text', 'site_address' . carbon_lang(), 'Адрес'),
    Field::make('text', 'site_email', 'Почта'),
    Field::make('text', 'vk', 'Ссылка на VK'),
    Field::make('text', 'tg', 'Ссылка на Telegramm'),
  ])

  ->add_tab('Др. элементы на странице', [
    Field::make('text', 'button_reg' . carbon_lang(), 'Кнопка "Зарегистрироваться"'),
    Field::make('text', 'forum' . carbon_lang(), 'О ФОРУМЕ')->set_width(50),
    Field::make('text', 'spekers' . carbon_lang(), 'ГОСТИ И СПИКЕРЫ')->set_width(50),
    Field::make('text', 'programm' . carbon_lang(), 'ДЕЛОВАЯ ПРОГРАММА')->set_width(50),
    Field::make('text', 'exposure' . carbon_lang(), 'Пакет участников')->set_width(50),
    Field::make('text', 'exposure_file' . carbon_lang(), 'Пакет участников файл')->set_width(50),
    Field::make('text', 'partners' . carbon_lang(), 'ПАРТНЕРЫ')->set_width(50),
    Field::make('text', 'map' . carbon_lang(), 'КАК ДОБРАТЬСЯ')->set_width(50),
    Field::make('text', 'information' . carbon_lang(), 'Полезная информация')->set_width(50),
    Field::make('text', 'contacts' . carbon_lang(), 'Контакты')->set_width(50),
    Field::make('text', 'speeker_became' . carbon_lang(), 'Стать спикером кнопка')->set_width(50),
    Field::make('text', 'speeker_legend' . carbon_lang(), 'Текст станте спикером')->set_width(50),
    Field::make('text', 'location' . carbon_lang(), 'МЕСТО ПРОВЕДЕНИЯ')->set_width(50),
    Field::make('text', 'rcc' . carbon_lang(), 'АО РИВЦ')->set_width(50),
    Field::make('text', 'ceo' . carbon_lang(), 'Куратор Kazan Digital Week')->set_width(50),
    Field::make('text', 'name' . carbon_lang(), 'Куратор Kazan Digital Week')->set_width(50),
    Field::make('text', 'know_price' . carbon_lang(), 'Кнопка узнать цену')->set_width(50),
    Field::make('text', 'call_me' . carbon_lang(), 'СВЯЖИТЕСЬ С НАМИ')->set_width(50),
    Field::make('rich_text', 'footer_copy' . carbon_lang(), 'Текст в подвале'),
  ])

  ->add_tab('Форма узнать цену/перезвоните мне', [
    Field::make('text', 'form_heading_text' . carbon_lang(), 'Приветствие'),
    Field::make('text', 'form_label_name_1' . carbon_lang(), 'Контактное лицо'),
    Field::make('text', 'form_label_name_1_placeholder' . carbon_lang(), 'Пример: Иванов Иван Иванович'),
    Field::make('text', 'form_label_name_2' . carbon_lang(), 'Контактный телефон'),
    Field::make('text', 'form_btn_text' . carbon_lang(), 'Текст кнопки'),
  ])

  ->add_tab('Формы регистрации участников', [
    Field::make('text', 'participant_heading' . carbon_lang(), 'Заголовок'),
    Field::make('text', 'participant_subheading' . carbon_lang(), 'Текст-описание'),
    Field::make('rich_text', 'participant_label_heading' . carbon_lang(), 'Международный выставочный комплекс'),
    Field::make('text', 'participant_label_1' . carbon_lang(), 'Стать спикером деловой программы'),
    Field::make('text', 'participant_label_2' . carbon_lang(), 'Регистрация в качестве экспонента'),
    Field::make('text', 'participant_label_3' . carbon_lang(), 'Регистрация в качестве гостя'),
    Field::make('text', 'participant_btn' . carbon_lang(), 'Кнопка продоолжить'),
    Field::make('text', 'participant_btn_back' . carbon_lang(), 'Кнопка Назад'),
    Field::make('text', 'participant_heading2' . carbon_lang(), 'ЗАЯВКА УЧАСТИЯ В ФОРУМЕ'),
    Field::make('text', 'participant_label_heading1' . carbon_lang(), 'Регистрация в качестве спикера'),
    Field::make('text', 'participant_label_heading2' . carbon_lang(), 'Регистрация в качестве экспонента'),
    Field::make('text', 'participant_label_heading3' . carbon_lang(), 'Регистрация в качестве гостя'),
    Field::make('text', 'participant_label_heading3_text' . carbon_lang(), 'Дает право получить билет на посщениее экспозиции форума и деловой программы'),
    Field::make('text', 'seccess' . carbon_lang(), 'РЕГИСТРАЦИЯ ЗАВЕРШЕНА'),
    Field::make('text', 'seccess_text' . carbon_lang(), 'Информация о регистрации на мероприятие была отправлена на адрес почты'),
    Field::make('rich_text', 'seccess_calendar' . carbon_lang(), '21 – 22 cентября Добавить в календарь'),
    Field::make('text', 'route' . carbon_lang(), 'Проложить маршрут'),
    Field::make('text', 'share' . carbon_lang(), 'Поделиться мероприятием:'),
    Field::make('text', 'thanx' . carbon_lang(), 'Спасибо!'),
    Field::make('text', 'thanx_txt' . carbon_lang(), 'Скоро с Вами свяжутся наши менеджеры.'),
    Field::make('text', 'file_upload' . carbon_lang(), 'Загрузите свою фотографию(jpg, png)'),
    Field::make('text', 'file_upload_a' . carbon_lang(), 'Загрузите свою аннотацию доклада(doc, pdf)'),
  ])

  ->add_tab('Поля формы-заявки', [
    Field::make('text', 'first_name' . carbon_lang(), 'Имя')->set_width(50),
    Field::make('text', 'first_name_placeholder' . carbon_lang(), 'Имя placeholder')->set_width(50),
    Field::make('text', 'second_name' . carbon_lang(), 'Фамилия')->set_width(50),
    Field::make('text', 'second_name_placeholder' . carbon_lang(), 'Фамилия placeholder')->set_width(50),
    Field::make('text', 'third_name' . carbon_lang(), 'Отчество')->set_width(50),
    Field::make('text', 'third_name_placeholder' . carbon_lang(), 'Отчество placeholder')->set_width(50),
    Field::make('text', 'company_name' . carbon_lang(), 'Наименование компании')->set_width(50),
    Field::make('text', 'company_name_placeholder' . carbon_lang(), 'Наименование компании placeholder')->set_width(50),
    Field::make('text', 'email' . carbon_lang(), 'E-mail')->set_width(50),
    Field::make('text', 'email_placeholder' . carbon_lang(), 'E-mail placeholder')->set_width(50),
    Field::make('text', 'tel' . carbon_lang(), 'Контактный телефон')->set_width(50),
    Field::make('text', 'tel_placeholder' . carbon_lang(), 'Контактный телефон placeholder')->set_width(50),
    Field::make('text', 'site' . carbon_lang(), 'Веб–сайт')->set_width(50),
    Field::make('text', 'site_placeholder' . carbon_lang(), 'Веб–сайт placeholder')->set_width(50),
    Field::make('text', 'country' . carbon_lang(), 'Страна / Регион')->set_width(50),
    Field::make('text', 'country_placeholder' . carbon_lang(), 'Страна / Регион placeholder')->set_width(50),
    Field::make('text', 'city' . carbon_lang(), 'Город')->set_width(50),
    Field::make('text', 'city_placeholder' . carbon_lang(), 'Город placeholder')->set_width(50),
    Field::make('text', 'position' . carbon_lang(), 'Ваша должность')->set_width(50),
    Field::make('text', 'position_placeholder' . carbon_lang(), 'Ваша должность placeholder')->set_width(50),
    Field::make('text', 'caption' . carbon_lang(), 'Краткое описание тематики выступления')->set_width(50),
    Field::make('text', 'caption_placeholder' . carbon_lang(), 'Краткое описание тематики выступления placeholder')->set_width(50),
    Field::make('text', 'full_name' . carbon_lang(), 'Контактное лицо')->set_width(50),
    Field::make('text', 'full_name_placeholder' . carbon_lang(), 'Контактное лицо placeholder')->set_width(50),
    Field::make('text', 'participate_in_heading' . carbon_lang(), 'Планирую принять участие в(Заголовок)')->set_width(50),
    Field::make('text', 'participate_in_heading_placeholder' . carbon_lang(), 'Планирую принять участие в placeholder')->set_width(50),
    Field::make('complex', 'participate_in' . carbon_lang(), 'Планирую принять участие в(список)')
      ->add_fields([
        Field::make('text', 'name', 'Название')->set_width(50),
      ]),
    Field::make('text', 'exhibitor_heading' . carbon_lang(), 'Основная сфера деятельности Вашей компани(Заголовок)')->set_width(50),
    Field::make('text', 'exhibitor_heading_placeholder' . carbon_lang(), 'Основная сфера деятельности Вашей компани placeholder')->set_width(50),
    Field::make('complex', 'exhibitor_list' . carbon_lang(), 'Основная сфера деятельности Вашей компани(список)')
      ->add_fields([
        Field::make('text', 'name', 'Название')->set_width(50),
      ]),
    Field::make('text', 'exhibitor_heading2' . carbon_lang(), 'Предварительный размер экспозиции(Заголовок)'),
    Field::make('complex', 'exhibitor_list2' . carbon_lang(), 'Предварительный размер экспозиции(список)')
      ->add_fields([
        Field::make('text', 'name', 'Название')->set_width(50),
      ]),
    Field::make('rich_text', 'policy' . carbon_lang(), 'Политика конфедициальности')->set_width(50),
    Field::make('rich_text', 'policy2' . carbon_lang(), 'Текст согласен получать новости')->set_width(50),
    Field::make('text', 'type_company' . carbon_lang(), 'Тип компании')->set_width(50),
    Field::make('text', 'type_company_placeholder' . carbon_lang(), 'Тип компании placeholder')->set_width(50),
    Field::make('complex', 'type_company_list' . carbon_lang(), 'Тип компании(список)')
      ->add_fields([
        Field::make('text', 'name', 'Название')->set_width(50),
      ]),
  ]);
