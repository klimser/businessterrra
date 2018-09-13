var MenuItem = {
    setType: function(e, type) {
        var muted = (type === "url") ? "webpage_id" : "url";
        var container = $(e).closest(".menu-item-form");
        var activeElem = container.find(".field-menuitem-" + type);
        activeElem.removeClass("disabled-group");
        var inactiveElem = container.find(".field-menuitem-" + muted);
        inactiveElem.addClass("disabled-group");
    }
};