$(function () {
    $("button.gds-btn--back-to-top").on("click", function () {
        $("html, body").animate({
            scrollTop: "0px"
        }, 300)
    })
});
if ($('.gds-form-input__input--is-error').length > 0) {
    $('.gds-notification--error').removeClass('display-none');
}