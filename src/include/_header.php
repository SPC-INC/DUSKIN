<?php require_once '_core.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="icon" href="<?php echo HOME; ?>img/favicon.ico">
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" itemprop="description" content="<?php echo $meta['description']; ?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $meta['keyword']; ?>" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->
    <title><?php echo $meta['title']; ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $home; ?>css/common.css" />

    <link rel="canonical" href="<?php echo $meta['canonical']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $meta['title']; ?>" />
    <meta property="og:description" content="<?php echo $meta['description']; ?>" />
    <meta property="og:image" content="<?php echo HOME; ?>img/OGP.jpg" />
    <meta property="og:image:width" content="1440" />
    <meta property="og:image:height" content="900" />
    <meta property="og:site_name" content="<?php $meta['sitename']; ?>" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_GET['send'])) {
    ?>
        <div id="overlay" class="md-overlay active">
            <div class="modalWrapper">
                <div class="modalContents">
                    <div class="modalContents__img">
                        <img src="<?php echo HOME ?>img/email.svg" alt="メール">
                    </div>
                    <div class="modalContents__title">
                        送信完了
                    </div>
                    <p class="modalContents__para">
                        お問い合わせいただき<br class="sp">ありがとうございます。
                    </p>
                </div>
                <div class="modalClose">
                    <button class="modalClose__btn closeModal">閉じる</button>
                </div>
            </div>
        </div>
    <?php } ?>
    <header id="header" class="header" itemscope="" itemtype="https://schema.org/WPHeader">
        <div class="header__frame">
            <div class="header__base flex bet vcenter">
                <div class="header__left flex vcenter">
                    <a class="header__logo" href="<?php echo HOME; ?>">
                        <?php echo IS_HOME ? '<h1 class="headerLogo__in">' : '<span class="headerLogo__in">'; ?>
                        <img src="<?php echo HOME ?>img/logo.svg" alt="">
                        <?php echo IS_HOME ?  '</h1>' : '</span>'; ?>
                    </a>
                </div>
                <div class="header__right flex vcenter">
                    <img src="<?php echo HOME ?>img/logo2.svg" alt="">
                </div>
            </div>
        </div>
    </header>