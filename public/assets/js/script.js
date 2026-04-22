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
