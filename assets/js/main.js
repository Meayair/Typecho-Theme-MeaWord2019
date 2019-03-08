function Tip(info='hello'){
    $("#Tip-center h1").html(info);
    $("#Tip").fadeIn(500);
    setTimeout(function () { $("#Tip").fadeOut(500);}, 1500);
}
$(document).ready(function() {
    $("#loading").fadeOut(1200);
    $('body').on('click', '#pagination a', function() {
        $(this).addClass("loading").text("");
        $.ajax({
            type: "POST",
            url: $(this).attr("href"),
            success: function(data) {
                result = $(data).find(".articleList");
                nextHref = $(data).find(".next").attr("href");
                $("#list").append(result.fadeIn(500));
                $("#pagination a").removeClass("loading").text("加载更多");
                if (nextHref != undefined) {
                    $(".next").attr("href", nextHref);
                } else {
                    // If there is no link, that is the last page, then remove the navigation
                    $("#pagination").html("<span>没有了 ~</span>");
                }
            }
        });
        return false;
    });
    $(".to-top").click(function() {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
    });
    $("#noPrev").click(function() {
        Tip("已经是第一篇了~");
    });
    $("#noNext").click(function() {
        Tip("已经是最后一篇了~");
    });
})