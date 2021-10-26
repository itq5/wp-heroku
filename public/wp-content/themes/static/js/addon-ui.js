jQuery(function () {
    let index = 1;
    let normal = jQuery(".normal_shortcode");
    let panel = jQuery(".panel_shortcode");
    let cloud = jQuery(".cloud_shortcode");
    normal.draggable({
        containment: "#poststuff",
        start: function () {
            jQuery(this).css({zIndex: index++})
        }
    }).click(function () {
        jQuery(this).css({zIndex: index++})
    });
    panel.draggable({
        containment: "#poststuff",
        start: function () {
            jQuery(this).css({zIndex: index++})
        }
    }).click(function () {
        jQuery(this).css({zIndex: index++})
    });
    cloud.draggable({
        containment: "#poststuff",
        start: function () {
            jQuery(this).css({zIndex: index++})
        }
    }).click(function () {
        jQuery(this).css({zIndex: index++})
    });

    //添加点击事件
    jQuery(".close_button").click(function (){
        let button = jQuery(this).parent();
        if (button.hasClass("normal_shortcode")){
            jQuery('.button_normal_shortcode').click();
        }else if (button.hasClass("panel_shortcode")){
            jQuery('.button_panel_shortcode').click();
        }else if (button.hasClass("cloud_shortcode")){
            jQuery('.button_cloud_shortcode').click()
        }
    })
    jQuery(".button_shortcode").click(function (){
        let button = jQuery(this);
        if (button.hasClass("button_normal_shortcode")){
            if (normal.css("display")==="none"){
                normal.css({display:"block"});
            }else {
                normal.css({display:"none"});
            }
        }else if (button.hasClass("button_panel_shortcode")){
            if (panel.css("display")==="none"){
                panel.css({display:"block"});
            }else {
                panel.css({display:"none"});
            }
        }else if (button.hasClass("button_cloud_shortcode")){
            if (cloud.css("display")==="none"){
                cloud.css({display:"block"});
            }else {
                cloud.css({display:"none"});
            }
        }
    })
    jQuery(".submit_button").click(function (e){
        submit(e.target)
    });
})