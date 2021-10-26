<?php
    //添加短代码添加快捷方式
    function huankong_shortcode_select()
    {
        echo '
            <div class="button button_shortcode button_normal_shortcode" style="display: none">常用短代码</div>
            <div class="button button_shortcode button_panel_shortcode"  style="display: none">面板短代码</div>
            <div class="button button_shortcode button_cloud_shortcode"  style="display: none">网盘短代码</div>
            <div class="shortcode">
                <div class="normal_shortcode">
                    <div class="button close_button">X</div>
                    <select id="normal_short_code_select" class="short_code_select">
                        <option value="">常用短代码</option>
                        <option value="code">高亮代码</option>
                        <option value="title-pannel">标题面板</option>
                        <option value="zd-pannel">折叠面板</option>
                        <option value="login">登陆可见</option>
                        <option value="click">点击可见</option>
                        <option value="pass">密码可见</option>
                        <option value="reply">回复可见</option>
                        <option value="alink">网站跳转</option>
                        <option value="link-block">地址块</option>
                        <option value="select">未选中</option>
                        <option value="selected">选中</option>
                        <option value="bv">B站视频</option>
                        <option value="video">视频</option>
                    </select>
                    <div class="container"></div>
                    <div class="button submit_button">插入到文章</div>
                </div>
                <div class="panel_shortcode">
                    <div class="button close_button">X</div>
                    <select id="panel_short_code_select" class="short_code_select">
                        <option value="">面板短代码</option>
                        <option value="star1">橙色标星面板</option>
                        <option value="star2">蓝色标星面板</option>
                        <option value="star3">粉色标星面板</option>
                        <option value="star4">灰色标星面板</option>
                        <option value="info">信息提示面板</option>
                        <option value="success">成功提示面板</option>
                        <option value="warning">警告提示面板</option>
                        <option value="error">失败提示面板</option>
                    </select>
                    <div class="container"></div>
                    <div class="button submit_button">插入到文章</div>
                </div>
                <div class="cloud_shortcode">
                    <div class="button close_button">X</div>
                    <select id="cloud_short_code_select" class="short_code_select">
                        <option value="">网盘短代码</option>
                        <option value="default">默认网盘</option>
                        <option value="bd">百度网盘</option>
                        <option value="al">阿里网盘</option>
                        <option value="ty">天翼网盘</option>
                        <option value="ct">诚通网盘</option>
                        <option value="lz">蓝奏网盘</option>
                        <option value="360">360网盘</option>
                        <option value="wy">微云网盘</option>
                        <option value="xl">迅雷网盘</option>
                        <option value="github">Github</option>
                    </select>
                    <div class="container"></div>
                    <div class="button submit_button">插入到文章</div>
                </div>
            </div>';
    }
    add_action('media_buttons', 'huankong_shortcode_select', 11);

    function huankong_shortcode_button()
    {
        wp_enqueue_script('addon-edit-js', huankong_THEME_PATH.'/static/js/addon-edit.js');
    }

    add_action('admin_head', 'huankong_shortcode_button');
    //添加短代码添加快捷方式