$(function() {
    $("#menu-catalog-link").on("mouseover", (e) => {
        $("#menu-catalog-link ul").css("opacity", 1);
        $("#menu-catalog-link ul").css("visibility", "visible");
        $("header").css("border-radius", 0)
    });

    $("#menu-catalog-link").on("mouseout", (e) => {
        $("#menu-catalog-link ul").css("opacity", 0);
        $("#menu-catalog-link ul").css("visibility", "hidden");
        $("header").css("border-radius", "0 0 1.625em 1.625em")
    });
    
    $(".change__screen span").on("click", (e) => {
        $("#auth-wrapper").slideToggle(300);
        $("#reg-wrapper").slideToggle(300);
    });

})