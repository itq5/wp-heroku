<?php
    //解决了gravatar国内不能加载的问题,并且完成了让所有注册用户邮箱为qq的用户使用QQ头像
    if ($avatar == true) {
        function huankong_detail_down($url){
            $GLOBALS['detail'] = wp_remote_get($url);
            if (isset($GLOBALS['detail']['errors'])){
                huankong_detail_down($url);
            }
        }
        function huankong_cnavatar($avatar, $id_or_email)
        {
            $email = '';
            if (is_numeric($id_or_email)) {
                $id = (int)$id_or_email;
                $user = get_userdata($id);
                if ($user)
                    $email = $user->user_email;
            } else if (is_object($id_or_email)) {
                if (!empty($id_or_email->user_id)) {
                    $id = (int)$id_or_email->user_id;
                    $user = get_userdata($id);
                    if ($user)
                        $email = $user->user_email;
                } else if (!empty($id_or_email->comment_author_email)) {
                    $email = $id_or_email->comment_author_email;
                }
            } else {
                $email = $id_or_email;
            }
            preg_match('/^\d+@(vip\.)?qq.com$/', $email, $verify);
            $pos1 = stripos($email, '@qq.com');
            $pos2 = stripos($email, '@vip.qq.com');
            if ($pos1 > 0 || $pos2 > 0) {
                $pos = stripos($verify[0], '@');
                $code = substr($email, 0, $pos);
                $url = "https://q.qlogo.cn/headimg_dl?bs=qq&dst_uin={$code}&src_uin=www.jlwz.cn&fid=blog&spec=100";
                if ($GLOBALS['cache_l'] > 0) {
                    huankong_detail_down($url);
                    $image = $GLOBALS['detail']['body'];
                    $path = huankong_PLUGIN_PATH."cache/{$code}.jpg";
                    file_put_contents($path, $image);
                    $src = huankong_THEME_PATH."cache/{$code}.jpg";
                } else {
                    $src = $url;
                }
                return preg_replace("/src='[^']*'/", "src='$src'", $avatar);
            } else {
                return str_replace(array('cravatar.cn/avatar', 'www.gravatar.com/avatar', '0.gravatar.com/avatar', '1.gravatar.com/avatar', '2.gravatar.com/avatar', 'cn.gravatar.com/avatar'), 'gravatar.loli.net/avatar', $avatar);
            }
        }
        add_filter('get_avatar', 'huankong_cnavatar', 10, 3);
    }