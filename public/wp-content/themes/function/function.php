<?php
    function huankong_islogin()
    {
        return is_user_logged_in();
    }

    function huankong_isadmin($user_id = null)
    {
        if ($user_id == null) {
            $currentUser = wp_get_current_user();
            $roles = $currentUser->roles;

        } else {
            $user = get_userdata($user_id);
            $roles = $user->roles;
        }

        if (!empty($roles) && in_array('administrator', $roles)) {
            return true;
        } else {
            return false;  // 非管理员
        }

    }

    function huankong_file_get_svg($path)
    {
        WP_Filesystem();
        global $wp_filesystem;
//        $svg = $wp_filesystem->get_contents(huankong_THEME_PATH . '/static/img/' . $path);
        $svg = $wp_filesystem->get_contents(huankong_THEME_IMG_PATH . $path);
        return $svg;
    }

    function huankong_msubstr($str, $start, $length, $charset = 'utf-8', $suffix = true)
    {
        //中英文混合截取
        switch ($charset) {
            case 'utf-8':
                $char_len = 3;
                break;
            case 'UTF8':
                $char_len = 3;
                break;
            default:
                $char_len = 2;
        }
        // 小于指定长度，直接返回
        if (strlen($str) <= ($length * $char_len)) {
            return $str;
        }
        if (function_exists('mb_substr')) {
            $slice = mb_substr($str, $start, $length, $charset);
        } else if (function_exists('iconv_substr')) {
            $slice = iconv_substr($str, $start, $length, $charset);
        } else {
            $re['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
            $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
            $re['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
            $re['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
            preg_match_all($re[$charset], $str, $match);
            $slice = join('', array_slice($match[0], $start, $length));
        }
        if ($suffix) {
            return $slice;
        }
        return $slice;
    }

    function huankong_file_get_img_url($path)
    {
        return huankong_THEME_IMG_PATH . '/' . $path;
    }