window.onload = function (){
    setInterval(function (){
        const players = Plyr.setup('.corepress-video');
        jQuery(".clickshow").click(function () {
            jQuery("#share-plane").removeClass("share-plane-show");
            jQuery("#qrcode-plane").removeClass("share-plane-show");
            jQuery(this).toggleClass("clickshow-show")
        });
        jQuery(".zd-plane-title").click(function (a) {
            jQuery(this).hasClass("zd-plane-title-zk") ? (jQuery(this).removeClass("zd-plane-title-zk"), jQuery(this).next().slideUp()) : (jQuery(this).addClass("zd-plane-title-zk"), jQuery(this).next().slideDown())
        });
    },5000)
}