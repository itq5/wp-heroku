<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo pk_get_option('favicon') ?>">
    <link rel="apple-touch-icon" href="<?php echo pk_get_option('favicon') ?>" />
    <?php get_template_part('inc/metas') ?>
    <?php get_template_part('inc/seo') ?>
    <?php wp_head();  ?>
    <?php get_template_part('templates/css','grey') ?>
    <link rel="stylesheet" data-no-instant href="<?php echo pk_get_static_url(); ?>/assets/css/libs.min.css?ver=<?php echo PUOCK_CUR_VER ?>">
    <link rel="stylesheet" data-no-instant href="<?php echo pk_get_static_url(); ?>/assets/css/style.css?ver=<?php echo PUOCK_CUR_VER ?>">
    <script data-no-instant type="text/javascript" src="<?php echo pk_get_static_url(); ?>/assets/js/jquery.min.js?ver=<?php echo PUOCK_CUR_VER ?>"></script>
    <?php if(!empty(pk_get_option('tj_code_header',''))): ?>
        <?php echo pk_get_option('tj_code_header',''); ?>
    <?php endif; ?>
    <?php if(is_single() || is_page()):?>
    <?php endif; ?>
</head>
<body class="puock-<?php echo pk_theme_light() ? 'light':'dark' ?>">
<div id="page">
    <?php if(is_single()):?>
        <div class="progress" id="page-read-progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
        </div>
    <?php endif; ?>
    <div id="header-box" class="<?php pk_open_box_animated('animated fadeInDown') ?>"></div>
    <header id="header" class="<?php pk_open_box_animated('animated fadeInDown') ?>">
        <div class="navbar navbar-dark shadow-sm">
            <div class="container">
                <a href="<?php echo home_url() ?>" id="logo" class="navbar-brand">
                    <img id="logo-light" class="w-100 <?php echo pk_theme_light() ? '':'d-none' ?>" src="<?php echo pk_get_option('light_logo') ?>">
                    <img id="logo-dark" class="w-100 <?php echo pk_theme_light() ? 'd-none':'' ?>" src="<?php echo pk_get_option('dark_logo') ?>">
                </a>
                <div class="d-none d-lg-block puock-links">
                    <div id="menus" class="t-md ">
                        <?php echo pk_get_main_menu() ?>
                    </div>
                </div>
                <div class="mobile-menus d-block d-lg-none p-1 puock-text">
                    <i class="czs-menu-l t-xl mr-2 mobile-menu-s"></i>
                    <i class="colorMode czs-moon-l t-xl mr-2"></i>
                    <i class="search-modal-btn czs-search-l t-md"></i>
                </div>
            </div>
        </div>
    </header>
    <div id="search" class="d-none">
        <div class="w-100 d-flex justify-content-center">
            <div id="search-main" class="container p-block">
                <form action="<?php echo home_url() ?>">
                    <div class="search-layout">
                        <div class="search-input">
                            <input required type="text" name="s" id="s" class="form-control" placeholder="<?php _e('请输入搜索关键字', PUOCK) ?>">
                        </div>
                        <div class="search-start">
                            <button type="submit" class="btn-dark btn"><i class="czs-search-l mr-1"></i><?php _e('搜索', PUOCK) ?></button>
                        </div>
                        <div class="search-close-btn">
                            <button type="button" class="btn-danger btn ml-1 search-modal-btn"><i class="czs-close-l"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="d-none">
        <div class="menus">
            <div class="p-block">
                <div class="text-right"><i class="czs-close-l t-xl puock-link mobile-menu-close ta3"></i></div>
                <nav>
                    <?php echo pk_get_main_menu(true) ?>
                </nav>
            </div>
        </div>
    </div>
    <div id="mobile-menu-backdrop" class="modal-backdrop d-none"></div>
    <div id="search-backdrop" class="modal-backdrop d-none"></div>