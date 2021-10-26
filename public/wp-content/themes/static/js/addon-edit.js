let container = "";
let panel_star = ["star1","star2","star3","star4"];
let panel_alert = ["info","success","warning","error"];
let cloud = ["default","bd","al","ty","ct","lz","360","wy","xl","github"];
jQuery(document).ready(function () {
    //在页面加载完成后显示按钮
    jQuery(".button_shortcode").css({display: "inline-block"});
    //短代码切换监听事件
    let select = jQuery(".short_code_select");
    select.change(function () {
        container = jQuery(this).parent().find(".container");
        let val = jQuery(this).val();
        if (val === "title-pannel") {
            str = "[title-plane title='标题']内容[/title-plane]";
            container.html("<input placeholder='标题' required='required'/><input placeholder='内容' required='required'/>");
        } else if (val === "zd-pannel") {
            str = "[zd-plane title='折叠标题']折叠内容[/zd-plane]";
            container.html("<input placeholder='折叠标题' required='required'/><input placeholder='折叠内容' required='required'/>");
        } else if (val === "login") {
            str = "[loginshow]登录可见内容[/loginshow]";
            container.html("<input placeholder='登录可见内容' required='required'/>");
        } else if (val === "click") {
            str = "[clickshow]点击可见内容[/clickshow]";
            container.html("<input placeholder='点击可见内容' required='required'/>");
        } else if (val === "reply") {
            str = "[reply]回复可见内容[/reply]";
            container.html("<input placeholder='回复可见内容' required='required'/>");
        } else if (val === "pass") {
            str = "[pwdshow pwd='密码']密码可见内容[/pwdshow]";
            container.html("<input placeholder='密码' required='required'/><input placeholder='密码可见内容' required='required'/>");
        } else if (val === "alink") {
            str = "[icon-url href='网址' target='跳转方式']显示文本[/icon-url]";
            container.html("<input placeholder='网址' required='required'/><input placeholder='跳转方式' required='required' value='_blank'/><input placeholder='显示文本' required='required'/>");
        } else if (val === "link-block") {
            str = "[dh url='地址' icon='图标(没有可以留空)' des='描述']标题[/dh]";
            container.html("<input placeholder='地址' required='required'/><input placeholder='图标(没有可以留空)' required='required'/><input placeholder='描述' required='required'/><input placeholder='标题' required='required'/>");
        } else if (val === "select") {
            str = "[selectbox type='1']";
            container.html("");
        } else if (val === "selected") {
            str = "[selectbox type='2']";
            container.html("");
        } else if (val === "bv") {
            str = "[bvideo bv='bv号(带BV)'][/bvideo]";
            container.html("<input placeholder='bv号(带BV)' required='required'/>");
        } else if (val === "video") {
            str = "[c-video url='视频链接' type='video/mp4'][/c-video]";
            container.html("<input placeholder='视频链接' required='required'/>");
        } else if (val === "code") {
            str = "<pre class='corepress-code-pre'><code>代码</code></pre>";
            container.html("<input placeholder='代码' required='required'/>");
        }else if (jQuery.inArray(val,panel_star)>-1){
            if (val === "star1") {
                str = "[start-plane type='1']内容[/start-plane]";
            } else if (val === "star2") {
                str = "[start-plane type='2']内容[/start-plane]";
            } else if (val === "star3") {
                str = "[start-plane type='3']内容[/start-plane]";
            } else if (val === "star4") {
                str = "[start-plane type='4']内容[/start-plane]";
            }
            container.html("<input placeholder='内容' required='required'/>");
        }else if (jQuery.inArray(val,panel_alert)>-1){
            if (val === "info") {
                str = "[c-alert type='info']提示面板内容[/c-alert]";
            } else if (val === "success") {
                str = "[c-alert type='success']提示面板内容[/c-alert]";
            } else if (val === "warning") {
                str = "[c-alert type='warning']提示面板内容[/c-alert]";
            } else if (val === "error") {
                str = "[c-alert type='error']提示面板内容[/c-alert]";
            }
            container.html("<input placeholder='提示面板内容' required='required'/>");
        }else if (jQuery.inArray(val,cloud)>-1){
            if (val === "default") {
                str = "[c-downbtn type='default' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "bd") {
                str = "[c-downbtn type='bd' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "al") {
                str = "[c-downbtn type='al' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "ty") {
                str = "[c-downbtn type='ty' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "ct") {
                str = "[c-downbtn type='ct' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "lz") {
                str = "[c-downbtn type='lz' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "360") {
                str = "[c-downbtn type='360' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "wy") {
                str = "[c-downbtn type='wy' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "xl") {
                str = "[c-downbtn type='xl' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            } else if (val === "github") {
                str = "[c-downbtn type='github' url='链接' pwd='提取码(没有留空)']文件标题[/c-downbtn]";
            }
            container.html("<input placeholder='链接' required='required'/><input placeholder='提取码(没有留空)' required='required'/><input placeholder='文件标题' required='required'/>");
        }else {
            str = "";
            container.html("");
        }
        return false;
    });
});

//提交到编辑器
let str = "";
function submit(target) {
    let arr = [];
    let ready = 1;
    let input = container.find("input");
    if (input.length > 0) {
        for (let i = 0; i < input.length; i++) {
            if (input.eq(i).val() === "") {
                if (input.eq(i).attr("placeholder") !== "图标(没有可以留空)" && input.eq(i).attr("placeholder") !== "提取码(没有留空)") {
                    ready = 0;
                } else {
                    arr.push("");
                }
            } else {
                arr.push(input.eq(i).val());
            }
        }
    }
    if (ready === 0) {
        alert("请填写所有输入框");
    } else {
        for (let i = 0; i < arr.length; i++) {
            str = str.replace(input.eq(i).attr("placeholder"), arr[i]);
        }
        send_to_editor(str);
        let select = jQuery(target).parent();
        select.find("option").eq(0).prop("selected", true);
        select.find(".container").html("");
        str = "";
    }
}