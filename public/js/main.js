$(document).ready(function() {
    (function() {
        var showChar = 175;
        var ellipsestext = "...";

        $(".truncate").each(function() {
            var content = $(this).html();
            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content;
                var html =
                    '<div class="truncate-text" style="display:block">' +
                    c +
                    '<span class="moreellipses">' +
                    ellipsestext +
                    '&nbsp;&nbsp;<a href="" class="moreless more"><div class="text-right"><button class="btn btn-success btn-sm">Voir plus</button></div></a></span></span></div><div class="truncate-text" style="display:none">' +
                    h +
                    '<a href="" class="moreless less"><div class="text-right"><button class="btn btn-success btn-sm">Cacher</button></div></a></span></div>';

                $(this).html(html);
            }
        });

        $(".moreless").click(function() {
            var thisEl = $(this);
            var cT = thisEl.closest(".truncate-text");
            var tX = ".truncate-text";

            if (thisEl.hasClass("less")) {
                cT.prev(tX).toggle();
                cT.slideToggle();
            } else {
                cT.toggle();
                cT.next(tX).fadeToggle();
            }
            return false;
        });
        /* end iffe */
    })();

    /* end ready */
});
