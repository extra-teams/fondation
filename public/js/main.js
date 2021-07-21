$(document).ready(function () {
    $("#open-menu").click(function () {
        $(".sidebar-mobile").show(300);
    });

    $("#close-menu").click(function () {
        $(".sidebar-mobile").hide(300);
    });

    /* bouton recherche mobile */
    $(".header-top-searhmobile").click(function () {
        $(".header-top-center").toggleClass("show");
    });

});