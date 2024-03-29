<?php
/*
        Template Name: Главная
    */

get_header();

$page_id = get_the_ID();

$intro_img_id = carbon_get_post_meta($page_id, 'hero_img_mobile' . carbon_lang());
$intro_img_src = wp_get_attachment_image_url($intro_img_id, 'full');
?>

<section class="intro">
    <img class="intro__mobile-img lazy" data-src="<?php echo $intro_img_src; ?>" src="#" alt="Изображение для мобильных устройств. Фотография здания министрества сельского хозяйства Республики Татарстан ночью.">
    <video class="intro__video-bg" src="<?php echo carbon_get_post_meta($page_id, 'hero_vid' . carbon_lang()); ?>" playsinline muted autoplay loop></video>
    <div class="site-container">
        <svg class="icon icon-scroll-by intro__scroll-by-icon" width="21" height="28">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#scroll-by">
            </use>
        </svg>
        <div class="grid-container">
            <div class="intro__heading-block"></div>
            <div class="intro__heading-block">
                <div class="intro__heading-text">
                    <span class="intro__text-white js-intro-text js-first-anim">Kazan</span>
                    <div class="intro__text-big js-intro-text js-second-anim">
                        <svg width="649" height="99" viewBox="0 0 649 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_487_1260)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.39062 93V5.36368H38.2443C47.1055 5.36368 54.8742 7.08885 61.4805 10.6207C68.115 14.1257 73.2447 19.1982 76.8348 25.8017C80.4588 32.3902 82.2259 40.2094 82.2259 49.1819C82.2259 58.1541 80.4726 65.9845 76.8783 72.5978L76.8766 72.601C73.2881 79.1751 68.1887 84.2466 61.6108 87.7797L61.6048 87.7829C55.0276 91.2869 47.3273 93 38.571 93H4.39062ZM75.0803 26.7618C71.6771 20.4999 66.831 15.7083 60.5419 12.3868C54.2801 9.03804 46.8475 7.36368 38.2443 7.36368H6.39062V91H38.571C47.0653 91 54.4298 89.3393 60.6644 86.0178C66.899 82.6691 71.7179 77.8774 75.1211 71.6428C78.5243 65.381 80.2259 57.894 80.2259 49.1819C80.2259 40.4697 78.5107 32.9964 75.0803 26.7618ZM47.4986 67.905L47.505 67.9021C49.9595 66.7885 51.8684 64.8646 53.2164 61.976L53.2222 61.9636C54.5921 59.0796 55.3565 54.8721 55.3565 49.1819C55.3565 43.4948 54.5792 39.2922 53.1872 36.4123L53.1813 36.4001C51.8142 33.5219 49.86 31.5915 47.3194 30.47L47.3133 30.4673C44.6441 29.2782 41.2641 28.6392 37.1009 28.6392H31.0966V69.7245H37.7543C41.6856 69.7245 44.9112 69.0899 47.4986 67.905ZM29.0966 71.7245V26.6392H37.1009C41.4569 26.6392 45.1323 27.3063 48.1271 28.6403C51.1491 29.9744 53.4361 32.2749 54.9879 35.5419C56.567 38.809 57.3565 43.3556 57.3565 49.1819C57.3565 55.0081 56.5806 59.5547 55.0288 62.8218C53.5041 66.0888 51.2717 68.3894 48.3313 69.7234C45.4182 71.0575 41.8925 71.7245 37.7543 71.7245H29.0966ZM145.337 5.36368V93H118.631V5.36368H145.337ZM236.744 36.9702L236.37 35.4467C236.069 34.2159 235.605 33.183 235 32.3192L234.993 32.3097L234.987 32.3002C234.372 31.3994 233.604 30.641 232.67 30.0186L232.647 30.0032L232.625 29.9873C231.733 29.3564 230.657 28.8651 229.366 28.5366L229.345 28.5313L229.324 28.5254C228.053 28.1725 226.617 27.9858 225 27.9858C221.52 27.9858 218.675 28.8134 216.365 30.3753C214.067 31.9473 212.255 34.2392 210.965 37.3592C209.7 40.489 209.031 44.3565 209.031 49.0185C209.031 53.7471 209.676 57.6841 210.9 60.8816C212.114 64.0541 213.877 66.3752 216.142 67.9632C218.38 69.5319 221.237 70.3779 224.836 70.3779C228.116 70.3779 230.692 69.8978 232.647 69.0366L232.655 69.0331C234.657 68.1617 236.042 66.9792 236.938 65.5279C237.497 64.6236 237.899 63.6044 238.129 62.4532H223.163V42.2813H264.244V55.8793C264.244 63.7887 262.561 70.6804 259.101 76.4672C255.693 82.185 250.973 86.5831 244.979 89.6375L244.976 89.6392C239.019 92.6606 232.235 94.1435 224.673 94.1435C216.243 94.1435 208.749 92.3507 202.253 88.7006C195.76 85.0519 190.689 79.8445 187.058 73.1246L187.055 73.1188C183.438 66.374 181.672 58.4257 181.672 49.3452C181.672 42.23 182.75 35.8485 184.955 30.2368L184.958 30.2286C187.175 24.6583 190.262 19.9115 194.236 16.0236C198.188 12.1293 202.763 9.18894 207.946 7.21218C213.118 5.21251 218.645 4.22021 224.51 4.22021C229.654 4.22021 234.468 4.95507 238.938 6.44397C243.414 7.89891 247.395 9.99127 250.859 12.7319C254.349 15.4449 257.176 18.6753 259.323 22.4179C261.483 26.1821 262.79 30.3048 263.253 34.7635L263.482 36.9702H236.744ZM249.625 14.3062C246.358 11.7197 242.587 9.73229 238.313 8.3438C234.066 6.92808 229.465 6.22021 224.51 6.22021C218.874 6.22021 213.592 7.1731 208.664 9.07888C203.737 10.9574 199.394 13.748 195.637 17.4507C191.88 21.1261 188.94 25.6319 186.816 30.9681C184.72 36.3043 183.672 42.43 183.672 49.3452C183.672 58.1662 185.387 65.7757 188.817 72.1737C192.275 78.5717 197.08 83.4995 203.233 86.9571C209.386 90.4147 216.533 92.1435 224.673 92.1435C231.969 92.1435 238.435 90.7142 244.071 87.8555C249.734 84.9696 254.172 80.8314 257.384 75.4407C260.624 70.0229 262.244 63.5024 262.244 55.8793V44.2813H225.163V60.4532H240.35C240.336 60.9987 240.294 61.5284 240.224 62.042C240.206 62.1802 240.185 62.3173 240.162 62.4532C239.907 63.9728 239.4 65.3481 238.64 66.5789C237.496 68.4302 235.767 69.8595 233.453 70.8669C231.166 71.8742 228.294 72.3779 224.836 72.3779C220.916 72.3779 217.635 71.4522 214.994 69.6009C212.353 67.7496 210.366 65.0815 209.032 61.5966C207.698 58.1118 207.031 53.9191 207.031 49.0185C207.031 44.1724 207.725 40.0341 209.114 36.6037C210.529 33.1733 212.571 30.5461 215.239 28.722C217.935 26.8979 221.188 25.9858 225 25.9858C226.769 25.9858 228.389 26.19 229.859 26.5984C231.357 26.9796 232.664 27.5649 233.78 28.3545C234.923 29.1168 235.876 30.056 236.639 31.1723C237.401 32.2613 237.959 33.5273 238.313 34.9702H261.264C261.194 34.2947 261.103 33.628 260.992 32.9702C260.413 29.545 259.279 26.3593 257.588 23.413C255.574 19.901 252.919 16.8653 249.625 14.3062ZM327.437 5.36368V93H300.731V5.36368H327.437ZM361.811 27.6591V5.36368H438.503V27.6591H413.347V93H386.967V27.6591H361.811ZM388.967 25.6591V91H411.347V25.6591H436.503V7.36368H363.811V25.6591H388.967ZM487.603 93H458.848L487.775 5.36368H521.704L550.631 93H521.876L517.044 76.9915H492.436L487.603 93ZM490.95 74.9915H518.529L523.362 91H547.865L520.258 7.36368H489.221L461.615 91H486.117L490.95 74.9915ZM513.4 58.0029L505.066 30.3964H504.413L496.079 58.0029H513.4ZM510.707 56.0029L504.74 36.2345L498.772 56.0029H510.707ZM583.82 93V5.36368H610.526V70.7046H644.34V93H583.82ZM608.526 72.7046V7.36368H585.82V91H642.34V72.7046H608.526ZM143.337 7.36368H120.631V91H143.337V7.36368ZM325.437 7.36368H302.731V91H325.437V7.36368Z" fill="#07D827" />
                            </g>
                            <defs>
                                <filter id="filter0_d_487_1260" x="0.390625" y="0.220215" width="647.949" height="97.9233" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.572549 0 0 0 0 0.890196 0 0 0 0 0.662745 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_487_1260" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_487_1260" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <span class="intro__text-white js-intro-text js-third-anim">Week – 20<span>22</span></span>
                </div>
            </div>
        </div>
        <div class="grid-container js-animated-container">
            <div class="intro__content-block">
                <div class="intro__content-text"><?php echo carbon_get_post_meta($page_id, 'hero_text_left' . carbon_lang()); ?></div>
            </div>
            <div class="intro__content-block">
                <div class="intro__content-text"><?php echo carbon_get_post_meta($page_id, 'hero_text_right' . carbon_lang()); ?></div>
                <button class="button-reset button intro__content-btn" data-path="registration">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            </div>
        </div>
    </div>
</section>

<?php
$numbers_img_bg_id = carbon_get_post_meta($page_id, 'numbers_img' . carbon_lang());
$numbers_img_bg_src = wp_get_attachment_image_url($numbers_img_bg_id, 'full');
?>

<section class="numbers section-indent-padding" id="about">
    <img class="numbers__img lazy" data-src="<?php echo $numbers_img_bg_src; ?>" src="#" alt="Карта России">
    <div class="site-container">
        <div class="swiper numbers__slider">
            <div class="swiper-wrapper grid-container numbers__container">
                <?php
                $numbers = carbon_get_post_meta($page_id, 'numbers_list' . carbon_lang());

                foreach ($numbers as $item) :

                    $item_img = wp_get_attachment_image_url($item["img"], 'full');
                ?>
                    <div class="numbers__item swiper-slide">
                        <?php if (!empty($item_img)) : ?>
                            <img class="numbers__item-icon" src="<?php echo $item_img; ?>" alt="">
                        <?php elseif (!empty($item["title"])) : ?>
                            <span class="numbers__item-legend"><?php echo $item["title"]; ?></span>
                        <?php endif; ?>
                        <p class="numbers__item-text"><?php echo $item["descr"]; ?> </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="numbers__slider-pagination swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="forum section-indent-padding">
    <div class="site-container forum__container">
        <h2 class="forum__heading site-second-heading js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'forum_title' . carbon_lang()); ?></h2>

        <ul class="forum__list grid-container js-anim-fade-out" data-intersection-ratio="0.15">
            <?php
            $forum_fors = carbon_get_post_meta($page_id, 'forum_list' . carbon_lang());

            foreach ($forum_fors as $key => $item) :
            ?>
                <li class="forum__item">
                    <svg class="icon icon-forum-img0 forum__item-img">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#forum-img<?php echo $key; ?>">
                        </use>
                    </svg>
                    <p><?php echo $item["descr"] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="participants section-indent-padding" id="participants">
    <div class="site-container participants__container">
        <h2 class="site-second-heading participants__heading js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'participants_title' . carbon_lang()); ?></h2>
        <div class="participants__slider-wrapper js-anim-fade-out">
            <div class="slider-nav">
                <button class="button-reset slider-nav__btn js-participants-btn-prev" aria-label="Следующий слайд">
                    <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                        </use>
                    </svg>
                </button>
                <button class="button-reset slider-nav__btn js-participants-btn-next" aria-label="Следующий слайд">
                    <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                        </use>
                    </svg>
                </button>
            </div>
            <div class="swiper js-participants-slider">
                <div class="swiper-wrapper">
                    <?php
                    $participants = carbon_get_post_meta($page_id, 'participants_list' . carbon_lang());

                    foreach ($participants as $item) :

                        $item_img = wp_get_attachment_image_url($item["img"], 'full');
                        $item_img_mobile = wp_get_attachment_image_url($item["img_mobile"], 'full');
                    ?>
                        <div class="participants__item swiper-slide">
                            <div class="participants__item-img-wrapper">
                                <picture>
                                    <source srcset="<?php echo $item_img_mobile; ?>" media="(max-width: 767px)">
                                    <img class="participants__item-img lazy" data-src="<?php echo $item_img; ?>" src="#" alt="<?php echo $item["name"] ?> <?php echo $item["position"] ?>">
                                </picture>

                            </div>
                            <p class="participants__name site-third-heading-bold"><?php echo $item["name"] ?></p>
                            <span class="participants__position"><?php echo $item["position"] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="participants section-indent-padding">
    <div class="site-container participants__container">
        <h2 class="site-second-heading participants__heading js-animated-heading" data-text=""><?php echo carbon_get_post_meta($page_id, 'participants_title2' . carbon_lang()); ?></h2>
        <div class="participants__slider-wrapper js-anim-fade-out">
            <div class="slider-nav">
                <button class="button-reset slider-nav__btn js-participants-btn-prev" aria-label="Следующий слайд">
                    <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                        </use>
                    </svg>
                </button>
                <button class="button-reset slider-nav__btn js-participants-btn-next" aria-label="Следующий слайд">
                    <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                        </use>
                    </svg>
                </button>
            </div>
            <div class="swiper js-participants-slider">
                <div class="swiper-wrapper">
                    <?php
                    $participants2 = carbon_get_post_meta($page_id, 'participants_list2' . carbon_lang());

                    foreach ($participants2 as $item) :

                        $item_img = wp_get_attachment_image_url($item["img"], 'full');
                        $item_img_mobile = wp_get_attachment_image_url($item["img_mobile"], 'full');
                    ?>
                        <div class="participants__item swiper-slide">
                            <div class="participants__item-img-wrapper">
                                <picture>
                                    <source srcset="<?php echo $item_img_mobile; ?>" media="(max-width: 767px)">
                                    <img class="participants__item-img lazy" data-src="<?php echo $item_img; ?>" src="#" alt="<?php echo $item["name"] ?> <?php echo $item["position"] ?>">
                                </picture>
                            </div>
                            <p class="participants__name site-third-heading-bold"><?php echo $item["name"] ?></p>
                            <span class="participants__position"><?php echo $item["position"] ?></span>
                            <?php if (!empty($item["link"])) : ?>
                                <a class="participants__link" href="<?php echo $item["link"]; ?>">
                                    На сайт компании
                                    <svg class="icon icon-arrow participants__link-arrow" width="21" height="12">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                                        </use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="programm section-indent-padding" id="programm">
    <div class="site-container programm__container grid-container">
        <div class="programm__block programm__content">
            <h2 class="js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'prorgamm_heading' . carbon_lang()); ?></h2>
            <?php echo carbon_get_post_meta($page_id, 'prorgamm_heading_text' . carbon_lang()); ?>
            <div class="programm__nubmers">
                <div class="programm__nubmers-position"></div>
                <div class="programm__nubmers-separator">/</div>
                <div class="programm__nubmers-count"></div>
            </div>
        </div>
        <div class="programm__block">
            <div class="programm__themes">
                <?php echo carbon_get_post_meta($page_id, 'prorgamm_descr' . carbon_lang()); ?>
                <div class="programm__themes-btn"></div>
                <a href="<?php echo carbon_get_post_meta($page_id, 'prorgamm_file'); ?>" target="_blank" class="button-reset button programm__themes-btn">
                    <span class="_border-top"></span>
                    <span class="_border-bottom"></span>
                    <?php echo carbon_get_post_meta($page_id, 'prorgamm_btn_txt' . carbon_lang()); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-indent-padding gallery js-anim-fade-out js-map-laoding">
    <div class="site-container">
        <div class="slider-nav gallery__nav">
            <button class="button-reset slider-nav__btn js-gallery-btn-prev" aria-label="Следующий слайд">
                <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                    </use>
                </svg>
            </button>
            <button class="button-reset slider-nav__btn js-gallery-btn-next" aria-label="Следующий слайд">
                <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                    </use>
                </svg>
            </button>
        </div>
        <?php
        $gallery_imgs = carbon_get_post_meta($page_id, 'gallery_imgs' . carbon_lang());
        ?>
        <div class="gallery__container grid-container">
            <div class="gallery__container-block"></div>
            <div class="gallery__container-block">
                <div class="gallery__wrapper">
                    <div class="gallery__slider swiper js-gallery-slider">
                        <div class="swiper-wrapper">
                            <?
                            foreach ($gallery_imgs as $img_id) :

                                $gallery_imgs_src = wp_get_attachment_image_url($img_id, 'full');
                            ?>
                                <div class="swiper-slide gallery__slide">
                                    <img class="lazy" data-src="<?php echo $gallery_imgs_src; ?>" src="#" alt="Галлерея изображение">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery__container-block"></div>
        </div>
    </div>
</section>

<section class="shiled section-indent-padding js-anim-fade-out">
    <div class="site-container">
        <div class="shiled__container lazy" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/shield/bg.jpg" data-bg-fallback="<?php echo get_template_directory_uri(); ?>/assets/images/shield/bg.jpg">
            <p><?php echo carbon_get_theme_option('speeker_legend' . carbon_lang()); ?></p>
            <button class="button-reset button shiled__btn" data-path="registration" data-reg-form="speeker"><span class="_border-top"></span><span class="_border-bottom"></span><?php echo carbon_get_theme_option('speeker_became' . carbon_lang()); ?></button>
        </div>
    </div>
</section>

<section class="exposure section-indent-padding" id="exposure">
    <div class="site-container">
        <p class="exposure__mobile-heading site-second-heading js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'exposure_heading' . carbon_lang()); ?></p>
    </div>
    <div class="site-container exposure__container grid-container">
        <div class="exposure__block js-anim-fade-out">
            <div class="slider-nav exposure__nav">
                <button class="button-reset slider-nav__btn js-exposure-btn-prev" aria-label="Следующий слайд">
                    <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                        </use>
                    </svg>
                </button>
                <button class="button-reset slider-nav__btn js-exposure-btn-next" aria-label="Следующий слайд">
                    <svg class="icon icon-arrow slider-nav__btn-icon" width="21" height="12">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                        </use>
                    </svg>
                </button>
            </div>
            <div class="exposure__slider js-exposure-slider swiper">
                <div class="swiper-wrapper">
                    <?
                    $exposure_imgs = carbon_get_post_meta($page_id, 'exposure_imgs' . carbon_lang());

                    foreach ($exposure_imgs as $img_id) :

                        $exposure_imgs_src = wp_get_attachment_image_url($img_id, 'full');
                    ?>
                        <img class="exposure__slide swiper-slide lazy" data-src="<?php echo $exposure_imgs_src; ?>" src="#" alt="">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="exposure__block">
            <div class="exposure__content">
                <h2 class="js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'exposure_heading' . carbon_lang()); ?></h2>
                <?php echo carbon_get_post_meta($page_id, 'exposure_heading_txt' . carbon_lang()); ?>
                <div class="exposure__links">
                    <?php
                    $exposure_links = carbon_get_post_meta($page_id, 'exposure_links' . carbon_lang());

                    foreach ($exposure_links as $item) :
                    ?>
                        <a class="exposure__link" target="_blank" href="<?php echo $item['file']; ?>">
                            <?php echo $item['name']; ?>
                            <svg class="icon icon-arrow exposure__link-arrow" width="21" height="12">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                                </use>
                            </svg>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feautures section-indent-padding">
    <div class="site-container feautures__container grid-container">
        <?
        $feautures = carbon_get_post_meta($page_id, 'feautures' . carbon_lang());

        foreach ($feautures as $item) :
        ?>
            <div class="feautures__item">
                <div class="feautures__item-inner">
                    <p class="feautures__item-heading"><?php echo $item["name"]; ?></p>
                    <p class="feautures__text"><?php echo $item["txt"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="pakages section-indent-padding">
    <div class="site-container pakages__container grid-container js-anim-fade-out" data-intersection-ratio="0.25">
        <?
        $pakages = carbon_get_post_meta($page_id, 'pakages' . carbon_lang());

        foreach ($pakages as $item) :
        ?>
            <div class="pakages__item">
                <div class="pakages__item-top">
                    <h3 class="pakages__item-name"><?php echo $item["name"]; ?></h3>
                    <p><?php echo $item["txt"]; ?></p>
                </div>
                <div class="pakages__item-bottom">
                    <button class="button-reset pakages__item-btn" data-path="callback" data-heading="<?php echo carbon_get_theme_option('know_price' . carbon_lang()); ?>">
                        <span class="_name"><?php echo carbon_get_theme_option('know_price' . carbon_lang()); ?></span>
                        <span class="pakages__item-btn-icon-wrapper">
                            <svg class="icon icon-arrow pakages__item-btn-icon" width="20" height="12">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow">
                                </use>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="partners section-indent-padding js-partners-container" id="partners">
    <div class="site-container partners__container">
        <h2 class="site-second-heading partners__heading js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'partners3_heading' . carbon_lang()) ?></h2>
        <div class="partners__list grid-container js-anim-fade-out">
            <?
            $partners = carbon_get_post_meta($page_id, 'partners3' . carbon_lang());

            foreach ($partners as $item) :

                $item_img = wp_get_attachment_image_url($item["img"], 'full');
            ?>
                <a class="partners__item" target="_blank" href="<?php echo $item["txt"] ?>">
                    <img class="lazy" data-src="<?php echo $item_img; ?>" src="#" alt="">
                </a>
            <?php endforeach; ?>
        </div>
        <button class="button-reset partners__show-more js-partners-show-btn"><span class="_show">Смотреть
                ещё</span><span class="_hide">Скрыть</span></button>
    </div>
</section>

<section class="partners section-indent-padding js-partners-container" id="partners">
    <div class="site-container partners__container">
        <h2 class="site-second-heading partners__heading js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'partners_heading' . carbon_lang()) ?></h2>
        <div class="partners__list grid-container js-anim-fade-out">
            <?
            $partners = carbon_get_post_meta($page_id, 'partners' . carbon_lang());

            foreach ($partners as $item) :

                $item_img = wp_get_attachment_image_url($item["img"], 'full');
            ?>
                <a class="partners__item" target="_blank" href="<?php echo $item["txt"] ?>">
                    <img class="lazy" data-src="<?php echo $item_img; ?>" src="#" alt="">
                </a>
            <?php endforeach; ?>
        </div>
        <button class="button-reset partners__show-more js-partners-show-btn"><span class="_show">Смотреть
                ещё</span><span class="_hide">Скрыть</span></button>
    </div>
</section>

<?php
$partners = carbon_get_post_meta($page_id, 'partners2' . carbon_lang());
?>

<?php if (!empty($partners)) : ?>
    <section class="partners section-indent-padding js-partners-container">
        <div class="site-container partners__container">
            <h2 class="site-second-heading partners__heading js-animated-heading"><?php echo carbon_get_post_meta($page_id, 'partners2_heading' . carbon_lang()) ?></h2>
            <div class="partners__list grid-container js-anim-fade-out">
                <?
                foreach ($partners as $item) :

                    $item_img = wp_get_attachment_image_url($item["img"], 'full');
                ?>
                    <a target="_blank" href="<?php echo $item["txt"] ?>" class="partners__item">
                        <img class="lazy" data-src="<?php echo $item_img; ?>" src="#" alt="">
                    </a>
                <?php endforeach; ?>
            </div>
            <button class="button-reset partners__show-more js-partners-show-btn"><span class="_show">Смотреть
                    ещё</span><span class="_hide">Скрыть</span></button>
        </div>
    </section>
<?php endif; ?>

<section class="map" id="map">
    <div class="map__container js-map" data-coords="55.611597, 49.298878" data-center="55.611597, 49.298878"></div>
    <div class="site-container map__content">
        <div class="map__content-block js-anim-fade-out">
            <p class="map__heading-text"><?php echo carbon_get_theme_option('location' . carbon_lang()); ?></p>
            <p class="map__link">
                <svg class="icon icon-marker map__link-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#marker">
                    </use>
                </svg><?php echo $GLOBALS['kdw']['address']; ?>
            </p><a class="map__link" href="tel:<?php echo $GLOBALS['kdw']['phone_digits']; ?>">
                <svg class="icon icon-tel map__link-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#tel">
                    </use>
                </svg>
                <div class="div"><?php echo $GLOBALS['kdw']['phone']; ?><span><?php echo carbon_get_theme_option('name' . carbon_lang()); ?></span></div>
            </a><a class="map__link" href="mailto:<?php echo $GLOBALS['kdw']['email']; ?>">
                <svg class="icon icon-mail map__link-icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#mail">
                    </use>
                </svg><?php echo $GLOBALS['kdw']['email']; ?></a>
            <ul class="socials map__socials">
                <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['kdw']['vk']; ?>">
                        <svg class="icon icon-vk socials__link-icon" width="22" height="14">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#vk">
                            </use>
                        </svg></a></li>
                <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['kdw']['tg']; ?>">
                        <svg class="icon icon-tg socials__link-icon" width="20" height="16">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#tg">
                            </use>
                        </svg></a></li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>