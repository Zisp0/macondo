var sizeContent;
var sizeTitle;

function tamañoLetra() {
    sizeContent = $(".postTxt").css("font-size");
    sizeContent = parseInt(sizeContent, 10);
    sizeTitle = $(".postTitle").css("font-size");
    sizeTitle = parseInt(sizeTitle, 10);
}


$(function () {

    $('#wordSizeUp').click(function () {
        tamañoLetra();
        if ((sizeContent + 2) <= 46) {
            $(".postTxt").css("font-size", "+=2");
        }
        if ((sizeTitle + 2) <= 52) {
            $(".postTitle").css("font-size", "+=2");
        }

    });

    $('#wordSizeDown').click(function () {
        tamañoLetra();
        if ((sizeContent - 2) >= 14) {
            $(".postTxt").css("font-size", "-=2");
        }
        if ((sizeTitle - 2) >= 20) {
            $(".postTitle").css("font-size", "-=2");
        }
    });
});

