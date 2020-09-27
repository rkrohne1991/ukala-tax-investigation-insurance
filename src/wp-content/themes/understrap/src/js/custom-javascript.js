jQuery(function ($) {

    const body = $("body");
    // const menu = $("div[data-element='menu']");
    const overlay = $("<div class='d-none'>").addClass("menu-overlay w-100 h-100 position-fixed").appendTo("body");


    $("button[data-action='toggle-menu']").on("click", () => {   
        if(body.hasClass("menu-open")) {
            closeMenu();
        } else {
            body.addClass("menu-open");
            // menu.addClass('show');
            overlay.addClass("show d-block");
            // overlay.addClass("show d-block").click(function() {
            //     closeMenu();                    
            // });
        }
    });

    function closeMenu() {
        body.removeClass("menu-open");
        // menu.removeClass('show');
        overlay.removeClass('show d-block');
    }

});