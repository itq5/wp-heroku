<?php
    /*
        Plugin Name: short code and qqavater
        Plugin URI: https://blog.huankong.top/
        Description: 果核博客wp主题短代码移植，解决了gravatar国内不能加载的问题,并且完成了让所有注册用户邮箱为qq的用户使用QQ头像
        Version: 0.77
        Author: huankong
        Author URI: https://blog.huankong.top/
        License: GPL2
    */
    //变量
    define('huankong_THEME_PATH', plugin_dir_url(__FILE__));
    define('huankong_THEME_IMG_PATH', plugin_dir_url(__FILE__) . '/static/img');
    define('huankong_PLUGIN_PATH', str_replace("\\", '/', plugin_dir_path(__FILE__)));
    define('huankong_FUNCTION_PATH', huankong_PLUGIN_PATH."function/");
    require_once huankong_FUNCTION_PATH."config.php";
    require_once huankong_FUNCTION_PATH."load.php";
    require_once huankong_FUNCTION_PATH."qqavatar.php";
    require_once huankong_FUNCTION_PATH."function.php";
    require_once huankong_FUNCTION_PATH."shortcode.php";
    require_once huankong_FUNCTION_PATH."edit-power.php";