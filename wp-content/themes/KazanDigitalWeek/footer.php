</main>
<footer class="footer">
  <div class="site-container">
    <div class="grid-container">
      <div class="footer__block">
        <button class="button-reset button footer__btn" data-path="registration"><span class="_border-top"></span><span class="_border-bottom"></span><?php echo $GLOBALS['kdw']['button_reg']; ?></button>
      </div>
      <div class="footer__block">
        <div class="footer__legend"><?php echo carbon_get_theme_option('footer_copy' . carbon_lang()); ?></div>
        <ul class="footer__links">
          <?
          $site_links_footer2 = carbon_get_theme_option('site_links' . carbon_lang());

          foreach ($site_links_footer2 as $link) :
          ?>
            <li class="footer__links-wrapper"><a class="footer__nav-link" target="_blank" href="<?php echo $link["file"] ?>"><?php echo $link["name"] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="footer__block">
        <p class="footer__legend"><?php echo carbon_get_theme_option('rcc' . carbon_lang()); ?></p><a class="footer__link" href="tel:<?php echo $GLOBALS['kdw']['phone_digits']; ?>"><?php echo $GLOBALS['kdw']['phone']; ?></a>
        <p class="footer__chief"><?php echo carbon_get_theme_option('head_kdw' . carbon_lang()); ?><span><?php echo carbon_get_theme_option('ceo' . carbon_lang()); ?></span></p>
        <ul class="socials">
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
    <ul class="footer__links _mobile">
      <?
      $site_links_footer = carbon_get_theme_option('site_links' . carbon_lang());

      foreach ($site_links_footer as $link) :
      ?>
        <li class="footer__links-wrapper"><a class="footer__nav-link" target="_blank" href="<?php echo $link["file"] ?>"><?php echo $link["name"] ?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="footer__copyright">
      <p class="footer__copyright-txt"><?php echo carbon_get_theme_option('site_copyright' . carbon_lang()); ?></p>
      <div class="">
        <a class="footer__copyright-link" target="_blank" href="https://www.nailgalimov.site">Develop by:<span>Nail Galimov</span></a>
        <a class="footer__copyright-link" href="https://www.behance.net/vladalyakin" target="_blank">Design by:<span>Vlad Alyakin</span></a>
      </div>
    </div>
  </div>
</footer>
</div>
<div class="modal">
  <div class="modal__container js-modal-registrtion" data-target="registration">
    <div class="modal__content site-container">
      <button class="button-reset modal__close-btn modal-close"><span></span><span></span></button>
      <div class="registration">
        <div class="registration-type">
          <div class="registration-type__heading registration__heading"><?php echo carbon_get_theme_option('participant_heading' . carbon_lang()); ?></div>
          <div class="registration-type__text"><?php echo carbon_get_theme_option('participant_subheading' . carbon_lang()); ?><button class="button-reset" data-path="callback" data-heading="<?php echo carbon_get_theme_option('call_me' . carbon_lang()); ?>"><?php echo carbon_get_theme_option('call_me' . carbon_lang()); ?></a></div>
          <div class="registration-type__list">
            <label class="registration-type__item">
              <input class="visually-hidden js-registration-label" type="radio" name="type" value="speeker"><span class="_layer"></span>
              <svg class="icon icon-man registration-type__item-icon" width="50" height="50">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#man"></use>
              </svg>
              <div class="registration-type__item-legend"><?php echo carbon_get_theme_option('participant_label_1' . carbon_lang()); ?></div>
              <div class="registration-type__item-text">
                <?php echo carbon_get_theme_option('participant_label_heading' . carbon_lang()); ?>
              </div>
            </label>
            <label class="registration-type__item">
              <input class="visually-hidden js-registration-label" type="radio" name="type" value="exhibitor"><span class="_layer"></span>
              <svg class="icon icon-building registration-type__item-icon" width="50" height="50">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#building"></use>
              </svg>
              <div class="registration-type__item-legend"><?php echo carbon_get_theme_option('participant_label_2' . carbon_lang()); ?></div>
              <div class="registration-type__item-text">
                <?php echo carbon_get_theme_option('participant_label_heading' . carbon_lang()); ?>
              </div>
            </label>
            <a href="https://kazandigitalweek.com/ru/sign-up" class="registration-type__item">
              <input class="visually-hidden js-registration-label" type="radio" name="type" value="guest"><span class="_layer"></span>
              <svg class="icon icon-men registration-type__item-icon" width="50" height="50">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#men"></use>
              </svg>
              <div class="registration-type__item-legend"><?php echo carbon_get_theme_option('participant_label_3' . carbon_lang()); ?></div>
              <div class="registration-type__item-text">
                <?php echo carbon_get_theme_option('participant_label_heading' . carbon_lang()); ?>
              </div>
            </a>
          </div>
          <button class="button-reset registration-type__btn registration__btn disabled"><?php echo carbon_get_theme_option('participant_btn' . carbon_lang()); ?></button>
        </div>
        <form method="POST" class="registration-form js-forms" action="<?php echo get_template_directory_uri(); ?>/includes/mail.php" data-need-validation data-form-name="exhibitor">
          <input type="hidden" class="input-hidden" name="reg-type" value="exhibitor">
          <div class="registration__form-legend"><?php echo carbon_get_theme_option('participant_heading2' . carbon_lang()); ?></div>
          <div class="registration-form__heading registration__heading"><?php echo carbon_get_theme_option('participant_label_heading2' . carbon_lang()); ?></div>
          <div class="registration-form__container">
            <label class="registration-form__label">
              <span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('company_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="company-name" placeholder="<?php echo carbon_get_theme_option('company_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('full_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="name" placeholder="<?php echo carbon_get_theme_option('full_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('tel' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="number" name="tel" placeholder="<?php echo carbon_get_theme_option('tel_placeholder' . carbon_lang()); ?>" data-parsley-phone data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('email' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="email" name="email" placeholder="<?php echo carbon_get_theme_option('email_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('position' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="position" placeholder="<?php echo carbon_get_theme_option('position_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name"><?php echo carbon_get_theme_option('site' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="url" name="web-site" placeholder="<?php echo carbon_get_theme_option('site_placeholder' . carbon_lang()); ?>" data-parsley-url>
            </label>
            <label class="registration-form__label">
              <span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('exhibitor_heading' . carbon_lang()); ?></span>
              <div class="custom-select">
                <select class="js-custom-select" name="company-sphere" data-parsley-required>
                  <option value=""><?php echo carbon_get_theme_option('exhibitor_heading_placeholder' . carbon_lang()); ?></option>
                  <?
                  $exhibitor_list = carbon_get_theme_option('exhibitor_list' . carbon_lang());

                  foreach ($exhibitor_list as $item) :
                  ?>
                    <option value="<?php echo $item["name"]; ?>"><?php echo $item["name"]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </label>
            <label class="registration-form__label">
              <span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('exhibitor_heading2' . carbon_lang()); ?></span>
              <div class="custom-select">
                <select class="js-custom-select" name="exposure-size" data-parsley-required>
                  <option value=""><?php echo carbon_get_theme_option('exhibitor_heading_placeholder' . carbon_lang()); ?></option>
                  <?
                  $exhibitor_list2 = carbon_get_theme_option('exhibitor_list2' . carbon_lang());

                  foreach ($exhibitor_list2 as $item) :
                  ?>
                    <option value="<?php echo $item["name"]; ?>"><?php echo $item["name"]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </label>
            <label class="registration-form__label registration-form__argeement">
              <input class="visually-hidden input-hidden" type="checkbox" name="argeement" value="yes" data-parsley-required>
              <?php echo carbon_get_theme_option('policy' . carbon_lang()); ?>
            </label>
            <label class="registration-form__label registration-form__argeement">
              <input class="visually-hidden input-hidden" type="checkbox" name="subcribe" value="yes">
              <?php echo carbon_get_theme_option('policy2' . carbon_lang()); ?>
            </label>
          </div>
          <div class="registration-form__btns">
            <button class="button-reset registration__btn _transparent js-registration-btn-back" type="button"><?php echo carbon_get_theme_option('participant_btn_back' . carbon_lang()); ?></button>
            <button class="button-reset registration__btn" type="submit"><?php echo $GLOBALS['kdw']['button_reg']; ?></button>
          </div>
        </form>
        <form method="POST" class="registration-form js-forms" action="<?php echo get_template_directory_uri(); ?>/includes/mail.php" data-need-validation data-form-name="guest">
          <input type="hidden" class="input-hidden" name="reg-type" value="guest">
          <div class="registration__form-legend"><?php echo carbon_get_theme_option('participant_heading2' . carbon_lang()); ?></div>
          <div class="registration-form__heading registration__heading"><?php echo carbon_get_theme_option('participant_label_heading3' . carbon_lang()); ?></div>
          <div class="registration-form__text"><?php echo carbon_get_theme_option('participant_label_heading3_text' . carbon_lang()); ?></div>
          <div class="registration-form__container">
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('second_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="second-name" placeholder="<?php echo carbon_get_theme_option('second_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label">
              <span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('first_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="name" placeholder="<?php echo carbon_get_theme_option('first_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name"><?php echo carbon_get_theme_option('third_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="third-name" placeholder="<?php echo carbon_get_theme_option('third_name_placeholder' . carbon_lang()); ?>">
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('company_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="company-name" placeholder="<?php echo carbon_get_theme_option('company_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('email' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="email" name="email" placeholder="<?php echo carbon_get_theme_option('email_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label">
              <span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('type_company' . carbon_lang()); ?></span>
              <div class="custom-select">
                <select class="js-custom-select" name="company-type" data-parsley-required>
                  <option value=""><?php echo carbon_get_theme_option('type_company_placeholder' . carbon_lang()); ?></option>
                  <?
                  $type_company_list = carbon_get_theme_option('type_company_list' . carbon_lang());

                  foreach ($type_company_list as $item) :
                  ?>
                    <option value="<?php echo $item["name"]; ?>"><?php echo $item["name"]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('tel' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="number" name="tel" placeholder="<?php echo carbon_get_theme_option('tel_placeholder' . carbon_lang()); ?>" data-parsley-phone data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name"><?php echo carbon_get_theme_option('site' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="url" name="web-site" placeholder="<?php echo carbon_get_theme_option('site_placeholder' . carbon_lang()); ?>" data-parsley-url>
            </label>
            <label class="registration-form__label is-empty"></label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('country' . carbon_lang()); ?></span>
              <div class="custom-select">
                <select class="js-dadata-select" name="country/region" data-parsley-required>
                  <option value=""><?php echo carbon_get_theme_option('country_placeholder' . carbon_lang()); ?></option>
                </select>
              </div>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('city' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="city" placeholder="<?php echo carbon_get_theme_option('city_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name"><?php echo carbon_get_theme_option('position' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="position" placeholder="<?php echo carbon_get_theme_option('position_placeholder' . carbon_lang()); ?>">
            </label>
            <label class="registration-form__label registration-form__argeement">
              <input class="visually-hidden input-hidden" type="checkbox" name="argeement" value="yes" data-parsley-required>
              <?php echo carbon_get_theme_option('policy' . carbon_lang()); ?>
            </label>
            <label class="registration-form__label registration-form__argeement">
              <input class="visually-hidden input-hidden" type="checkbox" name="subcribe" value="yes">
              <?php echo carbon_get_theme_option('policy2' . carbon_lang()); ?>
            </label>
          </div>
          <div class="registration-form__btns">
            <button class="button-reset registration__btn _transparent js-registration-btn-back" type="button"><?php echo carbon_get_theme_option('participant_btn_back' . carbon_lang()); ?></button>
            <button class="button-reset registration__btn" type="submit"><?php echo $GLOBALS['kdw']['button_reg']; ?></button>
          </div>
        </form>
        <form enctype="multipart/form-data" method="POST" class="registration-form js-forms" action="<?php echo get_template_directory_uri(); ?>/includes/mail.php" data-need-validation data-form-name="speeker">
          <input type="hidden" class="input-hidden" name="reg-type" value="speeker">
          <div class="registration__form-legend"><?php echo carbon_get_theme_option('participant_heading2' . carbon_lang()); ?></div>
          <div class="registration-form__heading registration__heading"><?php echo carbon_get_theme_option('participant_label_heading1' . carbon_lang()); ?></div>
          <div class="registration-form__container">
            <label class="registration-form__label">
              <span class="registration-form__label-name _required">
                <?php echo carbon_get_theme_option('second_name' . carbon_lang()); ?>
              </span>
              <input class="registration-form__input input" type="text" name="second-name" placeholder="<?php echo carbon_get_theme_option('second_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label">
              <span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('first_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="name" placeholder="<?php echo carbon_get_theme_option('first_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name"><?php echo carbon_get_theme_option('third_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="third-name" placeholder="<?php echo carbon_get_theme_option('third_name_placeholder' . carbon_lang()); ?>">
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('company_name' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="company-name" placeholder="<?php echo carbon_get_theme_option('company_name_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('email' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="email" name="email" placeholder="<?php echo carbon_get_theme_option('email_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('tel' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="number" name="tel" placeholder="<?php echo carbon_get_theme_option('tel_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name"><?php echo carbon_get_theme_option('site' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="url" name="web-site" placeholder="<?php echo carbon_get_theme_option('site_placeholder' . carbon_lang()); ?>" data-parsley-url>
            </label>
            <label class="registration-form__label is-empty"></label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('country' . carbon_lang()); ?></span>
              <div class="custom-select">
                <select class="js-dadata-select" name="country" data-parsley-required>
                  <option value=""><?php echo carbon_get_theme_option('country_placeholder' . carbon_lang()); ?></option>
                </select>
              </div>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('city' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="city" placeholder="<?php echo carbon_get_theme_option('city_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('position' . carbon_lang()); ?></span>
              <input class="registration-form__input input" type="text" name="position" placeholder="<?php echo carbon_get_theme_option('position_placeholder' . carbon_lang()); ?>" data-parsley-required>
            </label>
            <label class="registration-form__label is-empty"></label>
            <label class="registration-form__label">
              <span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('participate_in_heading' . carbon_lang()); ?></span>
              <div class="custom-select">
                <select class="js-custom-select" name="programm" data-parsley-required>
                  <option value=""><?php echo carbon_get_theme_option('participate_in_heading_placeholder' . carbon_lang()); ?></option>
                  <?
                  $participate_list = carbon_get_theme_option('participate_in' . carbon_lang());

                  foreach ($participate_list as $item) :
                  ?>
                    <option value="<?php echo $item["name"]; ?>"><?php echo $item["name"]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </label>
            <label class="registration-form__label is-empty"></label>
            <label class="registration-form__label input-file js-file-upload">
              <input class="visually-hidden" type="file" name="photo" data-parsley-required>
              <span class="input-file__text js-file-upload-text" data-text="<?php echo carbon_get_theme_option('file_upload' . carbon_lang()); ?>">
                <?php echo carbon_get_theme_option('file_upload' . carbon_lang()); ?>
              </span>
            </label>
            <label class="registration-form__label input-file js-file-upload">
              <input class="visually-hidden" type="file" name="annotation" data-parsley-required>
              <span class="input-file__text js-file-upload-text" data-text="<?php echo carbon_get_theme_option('file_upload_a' . carbon_lang()); ?>">
                <?php echo carbon_get_theme_option('file_upload_a' . carbon_lang()); ?>
            </label>
            <label class="registration-form__label registration-form__argeement">
              <input class="visually-hidden input-hidden" type="checkbox" name="argeement" value="yes" data-parsley-required>
              <?php echo carbon_get_theme_option('policy' . carbon_lang()); ?>
            </label>
            <label class="registration-form__label registration-form__argeement">
              <input class="visually-hidden input-hidden" type="checkbox" name="subcribe" value="yes">
              <?php echo carbon_get_theme_option('policy2' . carbon_lang()); ?>
            </label>
          </div>
          <div class="registration-form__btns">
            <button class="button-reset registration__btn _transparent js-registration-btn-back" type="button"><?php echo carbon_get_theme_option('participant_btn_back' . carbon_lang()); ?></button>
            <button class="button-reset registration__btn" type="submit"><?php echo $GLOBALS['kdw']['button_reg']; ?></button>
          </div>
        </form>
        <div class="registration__succes">
          <svg class="icon icon-success registration__succes-icon" width="100" height="100">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-multi.svg#success"></use>
          </svg>
          <div class="registration__succes-heading"><?php echo carbon_get_theme_option('seccess' . carbon_lang()); ?></div>
          <p class="registration__succes-txt"><?php echo carbon_get_theme_option('seccess_text' . carbon_lang()); ?></p>
          <div class="registration__succes-info">
            <p class="registration__succes-info-text">KAZAN DIGITAL WEEK — 2022</p>
            <div class="registration__succes-info-item">
              <svg class="icon icon-calendar registration__succes-info-icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#calendar"></use>
              </svg>
              <div class="registration__succes-info-label">
                <?php echo carbon_get_theme_option('seccess_calendar' . carbon_lang()); ?>
              </div>
            </div>
            <div class="registration__succes-info-item">
              <svg class="icon icon-marker registration__succes-info-icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#marker"></use>
              </svg>
              <p class="registration__succes-info-label"><?php echo $GLOBALS['kdw']['address']; ?><a class="registration__succes-info-link" target="_blank" href="https://yandex.ru/maps/?text=420017, г. Казань ул. Выставочная, 1, Большие Кабаны"><?php echo carbon_get_theme_option('route' . carbon_lang()); ?></a></p>
            </div>
          </div>
          <!-- <div class="registration__succes-btns">
                <button class="button-reset registration__btn">детали регистрации</button>
                <button class="button-reset registration__btn _transparent">Регистрация На деловое мероприятие</button>
              </div> -->
          <div class="registration__succes-links">
            <p class="registration__succes-links-legend"><?php echo carbon_get_theme_option('share' . carbon_lang()); ?></p>
            <ul class="registration__succes-links-list">
              <li class="registration__succes-links-item"><a class="registration__succes-links-link" href="/">
                  <svg class="icon icon-copy registration__succes-links-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#copy"></use>
                  </svg></a></li>
              <li class="registration__succes-links-item"><a class="registration__succes-links-link" href="/">
                  <svg class="icon icon-vk registration__succes-links-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#vk"></use>
                  </svg></a></li>
              <li class="registration__succes-links-item"><a class="registration__succes-links-link" href="/">
                  <svg class="icon icon-tg registration__succes-links-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#tg"></use>
                  </svg></a></li>
              <li class="registration__succes-links-item"><a class="registration__succes-links-link" href="/">
                  <svg class="icon icon-wt registration__succes-links-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#wt"></use>
                  </svg></a></li>
              <li class="registration__succes-links-item"><a class="registration__succes-links-link" href="/">
                  <svg class="icon icon-inst registration__succes-links-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#inst"></use>
                  </svg></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal__container callback js-modal-callbak" data-target="callback">
    <button class="button-reset modal__close-btn modal-close callback__close-btn"><span></span><span></span></button>
    <div class="callback__container">
      <div class="callback__heading js-heading"><?php echo carbon_get_theme_option('call_me' . carbon_lang()); ?></div>
      <p class="callback__heading-text"><?php echo carbon_get_theme_option('form_heading_text' . carbon_lang()); ?></p>
      <form method="POST" class="callback__form js-forms" action="<?php echo get_template_directory_uri(); ?>/includes/mail.php" data-need-validation>
        <input type="hidden" name="reg-type" value="test">
        <label class="registration-form__label callback__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('form_label_name_1' . carbon_lang()); ?></span>
          <input class="registration-form__input input" type="text" name="name" placeholder="<?php echo carbon_get_theme_option('form_label_name_1_placeholder' . carbon_lang()); ?>" data-parsley-required>
        </label>
        <?php
        $phone_palceholder = carbon_lang() === "_ru" ? "+7 (ХХХ) ХХХ ХХ ХХ" : "+00 (000) 00 00 00";
        ?>
        <label class="registration-form__label callback__label"><span class="registration-form__label-name _required"><?php echo carbon_get_theme_option('form_label_name_2' . carbon_lang()); ?></span>
          <input class="registration-form__input input" type="number" name="tel" placeholder="<?php echo $phone_palceholder; ?>" data-parsley-required>
        </label>
        <button class="button-reset registration__btn callback__btn" type="submit"><?php echo carbon_get_theme_option('form_btn_text' . carbon_lang()); ?></button>
      </form>
    </div>
  </div>
  <div class="modal__container callback" data-target="successCallback">
    <button class="button-reset modal__close-btn modal-close callback__close-btn"><span></span><span></span></button>
    <div class="callback__container">
      <div class="callback__heading"><?php echo carbon_get_theme_option('thanx' . carbon_lang()); ?></div>
      <p class="callback__heading-text"><?php echo carbon_get_theme_option('thanx_txt' . carbon_lang()); ?></p>
    </div>
  </div>
</div>
</body>
<?php wp_footer(); ?>

<style>
  .choices__list--single .choices__item--selectable {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 80%;
  }
</style>

</html>