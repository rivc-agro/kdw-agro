<?php
// Проверка на пустые поля уровня PHP милорд разработчика
if (empty($_POST["name"]) && empty($_POST["tel"]) && empty($_POST["email"])) {
    header('HTTP/1.1 500 Internal Server');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'FORM ERROR', 'code' => 1337)));
};

// require_once('phpmailer/PHPMailerAutoload.php');
// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';
// $html_email = '<!DOCTYPE html><html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Open+Sans" 
//     rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"><!--<![endif]--><style>
//     *{box-sizing:border-box}body{margin:0;padding:0}a[x-apple-data-detectors]{color:inherit!important;text-decoration:inherit!important}#MessageViewBody a{color:inherit;text-decoration:none}p{line-height:inherit}.desktop_hide,.desktop_hide table{mso-hide:all;display:none;max-height:0;overflow:hidden}@media (max-width:620px){.image_block img.big,.row-content{width:100%!important}.mobile_hide{display:none}.stack .column{width:100%;display:block}.mobile_hide{min-height:0;max-height:0;max-width:0;overflow:hidden;font-size:0}.desktop_hide,.desktop_hide table{display:table!important;max-height:none!important}.row-1 .column-1 .block-4.paragraph_block td.pad>div{font-size:15px!important}.row-1 .column-1 .block-3.paragraph_block td.pad>div{font-size:16px!important}.row-1 .column-1 .block-3.paragraph_block td.pad,.row-1 .column-1 .block-6.paragraph_block td.pad{padding:5px 5px 4px!important}.row-1 .column-1 .block-6.paragraph_block td.pad>div{font-size:14px!important}.row-1 .column-1 .block-5.image_block td.pad{padding:0!important}.row-1 .column-1 .block-10.button_block a span,.row-1 .column-1 .block-10.button_block div span,.row-1 .column-1 .block-7.button_block a span,.row-1 .column-1 .block-7.button_block div span,.row-1 .column-1 .block-9.button_block a span,.row-1 .column-1 .block-9.button_block div span{font-size:16px!important;line-height:1.5!important}.row-1 .column-1 .block-12.paragraph_block td.pad{padding:60px 5px 5px!important}.row-1 .column-1 .block-1.heading_block td.pad{padding:0 0 4px!important}.row-1 .column-1 .block-1.heading_block h1,.row-1 .column-1 .block-2.heading_block h1{font-size:20px!important}}
//     </style></head><body style="background-color:#fff;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none"><table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;background-color:#fff"><tbody><tr><td><table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;background-color:#383838">
//     <tbody><tr><td><table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;background-color:#383838;color:#000;width:600px" width="600"><tbody><tr><td class="column column-1" width="100%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:60px;padding-bottom:50px;border-top:0;border-right:0;border-bottom:0;border-left:0"><table 
//     class="heading_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-bottom:5px;text-align:center;width:100%"><h1 style="margin:0;color:#555;direction:ltr;font-family:Montserrat,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:23px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0">
//     <span class="tinyMce-placeholder" style="color: #ffffff;">Благодарим Вас за регистрацию в качестве гостя</span></h1></td></tr></table><table class="heading_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-bottom:35px;text-align:center;width:100%"><h1 
//     style="margin:0;color:#12a028;direction:ltr;font-family:Montserrat,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:23px;font-weight:700;letter-spacing:1px;line-height:120%;text-align:center;margin-top:0;margin-bottom:0"><strong><span class="tinyMce-placeholder">на Kazan Digital Week-2022!</span></strong></h1></td></tr></table><table class="paragraph_block block-3" width="100%" border="0" cellpadding="5" cellspacing="0" role="presentation" 
//     style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad"><div style="color:#000;direction:ltr;font-family:Montserrat,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:18px;font-weight:400;letter-spacing:0;line-height:120%;text-align:center;mso-line-height-alt:21.599999999999998px"><p style="margin:0"><strong><span style="color: #ffffff;">Международный форум пройдет&nbsp;</span></strong></p></div></td></tr></table><table 
//     class="paragraph_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad" style="padding-bottom:60px"><div style="color:#000;direction:ltr;font-family:Montserrat,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:18px;font-weight:400;letter-spacing:0;line-height:120%;text-align:center;mso-line-height-alt:21.599999999999998px"><p 
//     style="margin:0"><span style="color: #ffffff;"><strong>в г. Казани с 21 по 24 сентября 2022 года</strong></span></p></div></td></tr></table><table class="image_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="width:100%;padding-right:0;padding-left:0"><div class="alignment" align="left" style="line-height:10px"><img class="big" 
//     src="https://kdw-agro.com/wp-content/uploads/2022/07/111.png" style="display:block;height:auto;border:0;width:365px;max-width:100%" width="365"></div></td></tr></table><table class="paragraph_block block-6" width="100%" border="0" cellpadding="5" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad"><div 
//     style="color:#000;direction:ltr;font-family:Montserrat,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:18px;font-weight:400;letter-spacing:0;line-height:120%;text-align:center;mso-line-height-alt:21.599999999999998px"><p style="margin:0"><strong><span style="color: #ffffff;">Для того чтобы подтвердить свое участие,<br>необходимо заполнить анкету&nbsp;&nbsp;</span></strong></p></div></td></tr></table><table class="button_block block-7" width="100%" 
//     border="0" cellpadding="15" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad"><div class="alignment" align="center">
//     <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://docs.google.com/forms/d/1iSYY_7iNUfSS8adSTX7bPqgpvoqwgblwHFDFyhe7nWw/edit?usp=sharing" style="height:47px;width:286px;v-text-anchor:middle;" arcsize="3%" stroke="false" fillcolor="#12a028"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:"Trebuchet MS", Tahoma, sans-serif; font-size:18px"><![endif]-->
//     <a href="https://docs.google.com/forms/d/1iSYY_7iNUfSS8adSTX7bPqgpvoqwgblwHFDFyhe7nWw/edit?usp=sharing" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#12a028;border-radius:1px;width:auto;border-top:1px solid #12a028;font-weight:400;border-right:1px solid #12a028;border-bottom:1px solid #12a028;border-left:1px solid #12a028;padding-top:10px;padding-bottom:10px;font-family:"Montserrat", "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:60px;padding-right:60px;font-size:18px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 27px;">Заполнить анкету</span></span></a>
//     <!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div></td></tr></table><table class="button_block block-9" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-bottom:15px;padding-left:15px;padding-right:15px;padding-top:50px;text-align:center"><div class="alignment" align="center">
//     <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://kdw-agro.com/" style="height:47px;width:391px;v-text-anchor:middle;" arcsize="3%" stroke="false" fillcolor="#12a028"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:"Trebuchet MS", Tahoma, sans-serif; font-size:18px"><![endif]-->
//     <a href="https://kdw-agro.com/" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#12a028;border-radius:1px;width:auto;border-top:1px solid #12a028;font-weight:400;border-right:1px solid #12a028;border-bottom:1px solid #12a028;border-left:1px solid #12a028;padding-top:10px;padding-bottom:10px;font-family:"Montserrat", "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:40px;padding-right:40px;font-size:18px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 27px;">Выбрать дополнительные опции</span></span></a>
//     <!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div></td></tr></table><table class="button_block block-10" width="100%" border="0" cellpadding="15" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad"><div class="alignment" align="center">
//     <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://kdw-agro.com/" style="height:47px;width:391px;v-text-anchor:middle;" arcsize="3%" stroke="false" fillcolor="#12a028"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:"Trebuchet MS", Tahoma, sans-serif; font-size:18px"><![endif]-->
//     <a href="https://kdw-agro.com/" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#12a028;border-radius:1px;width:auto;border-top:1px solid #12a028;font-weight:400;border-right:1px solid #12a028;border-bottom:1px solid #12a028;border-left:1px solid #12a028;padding-top:10px;padding-bottom:10px;font-family:"Montserrat", "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:22px;padding-right:22px;font-size:18px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 27px;">Информация по отелям и трансферу</span></span></a>
//     <!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div></td></tr></table><table class="image_block block-11" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="width:100%;padding-right:0;padding-left:0"><div class="alignment" align="right" style="line-height:10px"><img class="big" 
//     src="https://kdw-agro.com/wp-content/uploads/2022/07/222.png" style="display:block;height:auto;border:0;width:364px;max-width:100%" width="364"></div></td></tr></table><table class="paragraph_block block-12" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad" 
//     style="padding-bottom:5px;padding-left:5px;padding-right:5px;padding-top:60px"><div style="color:#000;direction:ltr;font-family:Montserrat,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:18px;font-weight:400;letter-spacing:0;line-height:120%;text-align:center;mso-line-height-alt:21.599999999999998px"><p style="margin:0"><span style="color: #ffffff;">Будем рады видеть Вас на мероприятии!</span></p></div></td></tr></table></td></tr></tbody></table>
//     </td></tr></tbody></table></td></tr></tbody></table><!-- End --></body></html>';

$token = '5261738023:AAF7xRj8M_WE7GvXn4z4K0rHUWC4DK6aQjI';
$chat_id = '-511768335';
$speeker = 'speeker';
$exhibitor = 'exhibitor';
$guest = 'guest';
$formType = $_POST["reg-type"];
$message = "";

$photo = $_FILES['photo']['name'];
$photo_url = str_replace(" ", "%20", $photo);
$photo_tmp = $_FILES['photo']['tmp_name'];
$uploads_dir_photo =  'files/' . $photo_url;
move_uploaded_file($photo_tmp, $uploads_dir_photo);

$annotation = $_FILES['annotation']['name'];
$annotation_url = str_replace(" ", "%20", $annotation);
$annotation_tmp = $_FILES['annotation']['tmp_name'];
$uploads_dir_annotation =  'files/' . $annotation_url;
move_uploaded_file($annotation_tmp, $uploads_dir_annotation);

$url_photo = "http://" . $_SERVER['SERVER_NAME'] . '/wp-content/themes/KazanDigitalWeek/includes/' . $uploads_dir_photo;
$url_annotation = "http://" . $_SERVER['SERVER_NAME'] . '/wp-content/themes/KazanDigitalWeek/includes/' . $uploads_dir_annotation;


if ($formType === $speeker) {
    $name = $_POST["name"];
    $second_name = $_POST["second-name"];
    $third_name = $_POST["third-name"];
    $company_name = $_POST["company-name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $website = $_POST["web-site"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $position = $_POST["position"];
    $programm = $_POST["programm"];
    $argeement = $_POST["argeement"];
    $subcribe = $_POST["subcribe"];

    $arr = array(
        'Форма:' => "Стать спикером",
        'Фамилия:' => $second_name,
        'Имя:' => $name,
        'Отчество:' => $third_name,
        'Телефон:' => $tel,
        'Почта:' => $email,
        'Наименование компании:' => $company_name,
        'Должность:' => $position,
        'Сайт:' => $website,
        'Страна:' => $country,
        'Город:' => $city,
        'Планирую принять участие в:' => $programm,
        'Ссылка на Фото:' => $url_photo,
        'Ссылка на Аннотацию:' => $url_annotation,
        'Согласие с политикой по защите персональных данных:' => $argeement,
        'Согласие получать новости:' => $subcribe,
    );

    foreach ($arr as $key => $value) {
        $message .= "<b>" . $key . "</b> " . $value . "%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&parse_mode=html&text=" . $message, "r");
} elseif ($formType === $exhibitor) {
    $company_name = $_POST["company-name"];
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $website = $_POST["web-site"];
    $company_sphere = $_POST["company-sphere"];
    $exposure_size = $_POST["exposure-size"];
    $argeement = $_POST["argeement"];
    $subcribe = $_POST["subcribe"];

    $arr = array(
        'Форма:' => "Регистрация в качестве экспонента",
        'Имя:' => $name,
        'Телефон:' => $tel,
        'Почта:' => $email,
        'Должность:' => $position,
        'Наименование компании:' => $company_name,
        'Сайт:' => $website,
        'Основная сфера деятельности Вашей компании:' => $company_sphere,
        'Предварительный размер экспозиции:' => $exposure_size,
        'Согласие с политикой по защите персональных данных:' => $argeement,
        'Согласие получать новости:' => $subcribe,
    );

    foreach ($arr as $key => $value) {
        $message .= "<b>" . $key . "</b> " . $value . "%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", "r");
} elseif ($formType === $guest) {
    $name = $_POST["name"];
    $second_name = $_POST["second-name"];
    $third_name = $_POST["third-name"];
    $company_name = $_POST["company-name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $website = $_POST["web-site"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $position = $_POST["position"];
    $argeement = $_POST["argeement"];
    $subcribe = $_POST["subcribe"];

    $arr = array(
        'Форма:' => "Регистрация в качестве гостя",
        'Фамилия:' => $second_name,
        'Имя:' => $name,
        'Отчество:' => $third_name,
        'Телефон:' => $tel,
        'Почта:' => $email,
        'Наименование компании:' => $company_name,
        'Должность:' => $position,
        'Сайт:' => $website,
        'Страна:' => $country,
        'Город:' => $city,
        'Согласие с политикой по защите персональных данных:' => $argeement,
        'Согласие получать новости:' => $subcribe,
    );

    foreach ($arr as $key => $value) {
        $message .= "<b>" . $key . "</b> " . $value . "%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", "r");
} else {
    $name = $_POST["name"];
    $tel = $_POST["tel"];

    $arr = array(
        'Форма:' => "Свяжитесь со мной",
        'Имя:' => $name,
        'Телефон:' => $tel,
    );

    foreach ($arr as $key => $value) {
        $message .= "<b>" . $key . "</b> " . $value . "%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", "r");

    // $mail->setFrom('kazandigital@mail.ru', 'Your best site'); // от кого будет уходить письмо?
    // $mail->addAddress('dev@ngalimov.ru');     // Кому будет уходить письмо 

    // $mail->Subject = "test";
    // $mail->Body    = $html_email;
    // $mail->isHTML(true);
    // if ($mail->send()) {
    //     echo "OK";
    // } else {
    //     echo "Error: " . $mail->ErrorInfo;
    // }
};
