<?php
    function hk_shortcode_start()
    {
        wp_enqueue_script('jquery', 'https://lib.baomitu.com/jquery/latest/jquery.min.js');
        //引入播放器
        wp_enqueue_style('plyr', huankong_THEME_PATH.'static/lib/plyr/plyr.css');
        wp_enqueue_script('plyr', huankong_THEME_PATH.'static/lib/plyr/plyr.polyfilled.js');
        //代码高亮
        wp_enqueue_script('highlight', huankong_THEME_PATH.'static/lib/highlight/highlight.min.js');
        wp_enqueue_script('init', huankong_THEME_PATH.'static/lib/highlight/init.js');
        wp_enqueue_style('dark', huankong_THEME_PATH.'static/lib/highlight/dark.css');
        //补全部分JS/CSS效果
        wp_enqueue_style('post', huankong_THEME_PATH.'static/css/post.css');
        wp_enqueue_style('addons-css', huankong_THEME_PATH.'static/css/addon.css');
        //引入font-awsome
        wp_enqueue_style('fontawesome4', huankong_THEME_PATH.'/static/lib/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('fontawesome5', 'https://cdn.bootcdn.net/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    }
    add_action('wp_head', 'hk_shortcode_start', 2);

    function hk_shortcode_end(){
        wp_enqueue_script('addon-js', huankong_THEME_PATH.'static/js/addon.js');
    }
    add_action('wp_footer', 'hk_shortcode_end', 2);

    function hk_jqui_start()
    {
        //引入jqui
        wp_enqueue_style('jq-ui-css', huankong_THEME_PATH.'/static/lib/jqui/jquery-ui.min.css');
        wp_enqueue_script('jq-ui-js', huankong_THEME_PATH.'/static/lib/jqui/jquery-ui.min.js');
        //添加部分效果
        wp_enqueue_script('addon-jqui-js', huankong_THEME_PATH.'static/js/addon-ui.js');
        wp_enqueue_style('addon-jqui-css', huankong_THEME_PATH.'static/css/addon-ui.css');
    }
    add_action('admin_enqueue_scripts', 'hk_jqui_start');