const dropdownElementList = [].slice.call(
    document.querySelectorAll(".dropdown-toggle"),
);
dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl, {
        popperConfig: function (defaultBsPopperConfig) {
            return {
                ...defaultBsPopperConfig,
                strategy: "fixed",
            };
        },
    });
});


$(document).ready(function () {

    // Dropdown toggle click
    $('.nxl-hasmenu > .nxl-link').on('click', function () {

        let parent = $(this).parent();

        // Current menu index
        let menuIndex = $('.nxl-hasmenu').index(parent);

        // Save opened menu
        sessionStorage.setItem('openMenu', menuIndex);

    });

    // Check page reload type
    const navEntries = performance.getEntriesByType("navigation");

    if (navEntries.length > 0 && navEntries[0].type === 'reload') {

        // Browser refresh -> close all
        sessionStorage.removeItem('openMenu');

        $('.nxl-hasmenu').removeClass('nxl-trigger');
        $('.nxl-submenu').hide();

    } else {

        // Normal link click -> reopen previous menu
        let openMenu = sessionStorage.getItem('openMenu');

        if (openMenu !== null) {

            let menu = $('.nxl-hasmenu').eq(openMenu);

            menu.addClass('nxl-trigger');
            menu.find('.nxl-submenu').show();
        }
    }

});
