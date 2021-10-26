<?php
    //短代码区域  开始
    add_shortcode('title-plane', 'huankong_post_short_title_plane');
    function huankong_post_short_title_plane($atts, $content = null, $code = '')
    {
        if (isset($atts['title'])) {
            $atts['title'] = esc_html($atts['title']);
            $title = "<p>{$atts['title']}</p>";
        }
        $html = '<div class="title-plane">' . $title . '<div>' . esc_html(do_shortcode($content)) . '</div></div>';
        return $html;
    }

    add_shortcode('start-plane', 'huankong_post_short_start_plane');
    function huankong_post_short_start_plane($atts, $content = null, $code = '')
    {
        $html = '<div class="start-plane" type="' . esc_html($atts['type']) . '"><div>' . esc_html(do_shortcode($content)) . '</div></div>';
        return $html;
    }

    add_shortcode('icon-url', 'huankong_post_short_icon_url');
    function huankong_post_short_icon_url($atts, $content = null, $code = '')
    {
        $wporg_atts = shortcode_atts([
            'target' => '',
            'href' => '',
        ], $atts);
        if ($content == null) {
            $content = $wporg_atts['href'];
        }
        $html = '<a class="icon-url" href="' . esc_html($wporg_atts['href']) . '" target="' . esc_html($wporg_atts['target']) . '">' . esc_html(do_shortcode($content)) . '</a>';
        return $html;
    }

    add_shortcode('zd-plane', 'huankong_post_short_zd_plane');
    function huankong_post_short_zd_plane($atts, $content = null, $code = '')
    {
        if (isset($atts['title'])) {
            $title = esc_html($atts['title']);
        } else {
            $title = '折叠内容，点击展开';
        }
        $html = '<div class="zd-plane"><div class="zd-plane-title">' . $title . '</div><div class="zd-plane-content">' . esc_html(do_shortcode($content)) . '</div></div>';
        return $html;
    }

    add_shortcode('zd-plane', 'huankong_post_short_zd_plane');

    add_shortcode('loginshow', 'huankong_post_short_loginshow');

    function huankong_post_short_loginshow($atts, $content = null)
    {
        if (huankong_islogin()) {
            return esc_html(do_shortcode($content));
        } else {
            return '<div class="loginshow">本内容需要<a href="' . wp_login_url('//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) . '">登录</a>后才能查看</div>';
        }
    }

    add_shortcode('clickshow', 'huankong_post_short_clickshow');
    function huankong_post_short_clickshow($atts, $content = null)
    {
        $wporg_atts = shortcode_atts([
            'type' => '1',
        ], $atts);
        if ($wporg_atts['type'] == 1) {
            return '<span class="clickshow" title="点击显示或隐藏">' . esc_html(do_shortcode($content)) . '</span>';
        } else {
            return '<div class="clickshow clickshow-block" title="点击显示或隐藏">' . esc_html(do_shortcode($content)) . '</div>';
        }
    }


    add_shortcode('c-alert', 'huankong_post_short_alert');

    function huankong_post_short_alert($atts, $content = null)
    {
        $wporg_atts = shortcode_atts([
            'type' => 'info',
        ], $atts);

        if ($wporg_atts['type'] == 'warning') {
            return '<div class="c-alert c-alert-warning"><i class="far fa-exclamation-triangle"></i>' . esc_html(do_shortcode($content)) . '</div>';
        } else if ($wporg_atts['type'] == 'success') {
            return '<div class="c-alert c-alert-success"><i class="fas fa-check-circle"></i>' . esc_html(do_shortcode($content)) . '</div>';
        } else if ($wporg_atts['type'] == 'error') {
            return '<div class="c-alert c-alert-error"><i class="fas fa-exclamation-circle"></i>' . esc_html(do_shortcode($content)) . '</div>';
        } else {
            return '<div class="c-alert"><i class="far fa-info-circle"></i>' . esc_html(do_shortcode($content)) . '</div>';
        }
    }

    add_shortcode('c-downbtn', 'huankong_post_short_c_downbtn');

    function huankong_post_short_c_downbtn($atts, $content = '资源文件')
    {
        $wporg_atts = shortcode_atts([
            'type' => 'default',
            'pwd' => '',
            'url' => '',
        ], $atts);
        if ($wporg_atts['type'] == 'bd') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/bdwp.svg') . '" alt="">';
            $source = '百度网盘';
        } else if ($wporg_atts['type'] == 'ty') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/ty.png') . '" alt="">';
            $source = '天翼网盘';
        } else if ($wporg_atts['type'] == 'al') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/aliyunpan.png') . '" alt="">';
            $source = '阿里云盘';
        } else if ($wporg_atts['type'] == '360') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/360.png') . '" alt="">';
            $source = '360网盘';
        } else if ($wporg_atts['type'] == 'ct') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/ct.png') . '" alt="">';
            $source = '诚通网盘';
        } else if ($wporg_atts['type'] == 'lz') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/lanzou.png') . '" alt="">';
            $source = '蓝奏网盘';
        } else if ($wporg_atts['type'] == 'wy') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/weiyun.png') . '" alt="">';
            $source = '微云网盘';
        } else if ($wporg_atts['type'] == 'github') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/github.svg') . '" alt="">';
            $source = 'Github';
        } else if ($wporg_atts['type'] == 'xl') {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/thunder.png') . '" alt="">';
            $source = '迅雷云盘';
        } else {
            $icons = '<img class="c-downbtn-icon" src="' . huankong_file_get_img_url('shortcode/c-downbtn/default.svg') . '" alt="">';
            $source = '默认网盘';
        }

        if ($wporg_atts['pwd'] != null) {
            $pwd = ' | 提取码：<span class="c-downbtn-pwd-key">' . esc_html($wporg_atts['pwd']) . '</span> <i class="far fa-clone btn-copy-pwd" title="复制提取码"></i>';
        } else {
            $pwd = ' | 提取码: 无提取码';
        }
        return '
<div class="c-downbtn">
    <div class="c-downbtn-item">
        <div class="c-downbtn-describe">
            <div>' . $icons . '
            </div>
            <div class="c-downbtn-text">
                <div class="c-downbtn-text-title"><a target="_blank" href="' . esc_html($wporg_atts['url']) . '">' . esc_html($content) . '</a></div>
                <div class="c-downbtn-pwd">来源：' . $source . $pwd . '</div>
            </div>
        </div>
        <div class="c-downbtn-btn-plane">
            <a href="' . esc_html($wporg_atts['url']) . '" target="_blank"><button class="c-downbtn-btn"><i
                            class="fas fa-cloud-download-alt"></i> 立即下载</button></a>
        </div>
    </div>
</div>';
    }

    add_shortcode('pwdshow', 'huankong_post_short_pwdshow');
    function huankong_post_short_pwdshow($atts, $content = '')
    {

        $parameter = shortcode_atts([
            'pwd' => '',
        ], $atts);
        if (isset($_POST['pwd']) && $_POST['pwd'] == $parameter['pwd']) {
            return '<div class="pwd-show">' . esc_html(do_shortcode($content)) . '</div>';
        } else {
            return ' 
 <form class="pwd-show" method="POST">
 <div class="pwd-show-note">本内容需要输入密码才能查看</div>
 <div class="pwd-show-main">
  <i class="fa fa-lock"></i>
        <input type="text" name="pwd" value="" class="pwd-show-input">
        <button type="button" class="pwd-show-btn" onclick="if ($(this).prev().val()==' . "''" . '){addarelt(' . "'请输入密码'" . ');}else{console.log($(this).parent().parent().submit())}">提交</button>
</div>

 </form>
    ';
        }
    }

    function huankong_post_short_selectbox($atts, $content = '')
    {
        $parameter = shortcode_atts([
            'type' => '',
        ], $atts);
        if ($parameter['type'] == 1) {
            return '<span class="selectbox selectbox-yes">' . huankong_file_get_svg('selectbox.svg') . '</span>';
        } else {
            return '<span class="selectbox selectbox-not">' . huankong_file_get_svg('selectbox-not.svg') . '</span>';
        }
    }

    add_shortcode('selectbox', 'huankong_post_short_selectbox');

    function huankong_post_short_version_note($atts, $content = '')
    {
        $parameter = shortcode_atts([
            't' => '',
            'v' => '',
        ], $atts);

        $time = '<div class="theme-version-item"><div class="theme-version-info"><div class="theme-version">' . esc_html($parameter['v']) . '</div><div class="theme-version-time">' . esc_html($parameter['t']) . '</div></div>';
        $content = '<div class="theme-version-note">' . esc_html($content) . '</div></div>';
        return $time . $content;
    }

    add_shortcode('new_li', 'huankong_post_short_version_note');


    /*回复可见Functions*/
    function corepress_reply_to_read($atts, $content = null)
    {
        extract(shortcode_atts(array('notice' => '<p class="corepress-reply-to-read"><i class="fas fa-lock"></i>此处内容需要<a href="#respond" title="回复">回复</a>后才能查看</p>'), $atts));
        $email = null;
        $user_ID = (int)wp_get_current_user()->ID;
        if ($user_ID > 0) {
            if (huankong_isadmin($user_ID)) {
                return '<div class="corepress-reply-to-read-content"><p class="corepress-reply-to-read-content-title"><i class="fas fa-lock-open"></i>以下是回复可见内容</p>' . esc_html(do_shortcode($content)) . '</div>';
            }
        } else if (isset($_COOKIE['comment_author_email_' . COOKIEHASH])) {
            $safe = sanitize_email($_COOKIE['comment_author_email_' . COOKIEHASH]);
            $email = str_replace('%40', '@', $safe);

        } else {
            return $notice;
        }
        if (empty($email)) {
            return $notice;
        }
        global $wpdb;
        $post_id = get_the_ID();
        $query = "SELECT `comment_ID` FROM {$wpdb->comments} WHERE `comment_post_ID`={$post_id} and `comment_approved`='1' and `comment_author_email`='{$email}' LIMIT 1";
        if ($wpdb->get_results($query)) {
            return '<div class="corepress-reply-to-read-content"><p class="corepress-reply-to-read-content-title"><i class="fas fa-lock-open"></i>以下是回复可见内容</p>' . esc_html(do_shortcode($content)) . '</div>';
        } else {
            return $notice;
        }
    }

    add_shortcode('reply', 'corepress_reply_to_read');
    function corepress_bvideo($atts, $content = '')
    {
        $parameter = shortcode_atts([
            'bv' => 'BV1Ya411F7eP',
        ], $atts);

        $html = '<div class="corepress-bvideo"><iframe  src="//player.bilibili.com/player.html?bvid=' . esc_html($atts['bv']) . '&page=1&high_quality=1" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"> </iframe></div>';
        return $html;
    }


    add_shortcode('bvideo', 'corepress_bvideo');

    add_shortcode('c-video', 'huan_kong_corepress_cvideo');
    function huan_kong_corepress_cvideo($atts, $content = '')
    {
        $parameter = shortcode_atts([
            'url' => '',
            'img' => '',
            'type' => '',
        ], $atts);

        //此处poster可以加一个开关，不填写输出随机图
        $html = '<video class="corepress-video" controls crossorigin playsinline
           poster="' . esc_html(@$atts['img']) . '" controls>
        <source src="' . esc_html($atts['url']) . '" type="' . esc_html($atts['type']) . '">
    </video>';

        return $html;
    }

    add_shortcode('dh', 'huankong_corepress_url_dh');

    function huankong_corepress_url_dh($atts, $content = '')
    {
        $parameter = shortcode_atts([
            'url' => '',
            'icon' => '',
            'des' => '',
        ], $atts);
        $colors = ['#E57373', '#F06292', '#BA68C8', '#9575CD', '#7986CB', '#64B5F6', '#4DD0E1', '#4DB6AC', '#81C784', '#FFD54F', '#FF8A65', '#A1887F', '#90A4AE'];

        if ($atts['icon'] == null) {
            if ($content == '') {
                $content = '网址';
            }
            $imghtml = '<span class="corepress-img-none" style="background-color: ' . $colors[array_rand($colors, 1)]
                . '">' . huankong_msubstr(esc_html($content), 0, 1) . '</span>';
        } else {
            $imghtml = ' <img src="' . esc_html($atts['icon']) . '" alt="">';
        }
        $html = '
            <a href="' . esc_html($atts['url']) . '" target="_blank" rel="nofollow" class="corepress-url-dh-a">
            <div class="corepress-url-dh">
                <div class="corepress-url-dh-main">
                <div class="corepress-url-dh-icon">
                   ' . $imghtml . '
                </div>
                 <div class="corepress-url-dh-body">
                    <p class="corepress-url-dh-title">' . $content . '</p>
                    <div class="corepress-url-dh-description" title="' . esc_html($atts['des']) . '">' . esc_html($atts['des']) . '</div>
                </div>
                </div>
                <div class="corepress-url-dh-next"><i class="fal fa-arrow-circle-right"></i></div>
            </div>
            </a>
    ';
        return $html;
    }

    //短代码区域  结束