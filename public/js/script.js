$(function () {
    $("button.gds-btn--back-to-top").on("click", function () {
        $("html, body").animate({
            scrollTop: "0px"
        }, 300)
    })
});