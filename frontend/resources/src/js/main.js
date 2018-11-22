var Main = {
    throwFlashMessage: function (blockSelector, message, additionalClass, append) {
        if (typeof append !== 'boolean') append = false;
        var blockContent = '<div class="alert alert-dismissible ' + additionalClass + '"><button type="button" class="close" data-dismiss="alert" aria-label="Закрыть"><span>&times;</span></button>' + message + '</div>';
        if (append) $(blockSelector).append(blockContent);
        else $(blockSelector).html(blockContent);
    },

    scaleCaptcha: function() {
        var captchaElements = $('.g-recaptcha');
        if (captchaElements.length > 0) {
            captchaElements.each(function() {
                if ($(this).children().length > 0) {
                    var reCaptchaDiv = $(this).children().first();
                    var reCaptchaWidth = 304;
                    var containerWidth = $(this).width();

                    if (containerWidth > 0) {
                        $(reCaptchaDiv).css(
                            'transform',
                            reCaptchaWidth > containerWidth ? 'scale(' + (containerWidth / reCaptchaWidth) + ')' : ''
                        );
                    }
                }
            });
        }
    }
};

$(function() {
    var captchaElements = $('.g-recaptcha');
    if (captchaElements.length > 0) {
        captchaElements.each(function() {
            if ($(this).children().length > 0) {
                Main.scaleCaptcha();
            } else {
                $(this).on('DOMSubtreeModified', function () {
                    Main.scaleCaptcha();
                });
            }
        });
    }

    $('.modal').on('shown.bs.modal', function () {
        Main.scaleCaptcha();
    });
    $(window).resize(function() { Main.scaleCaptcha(); });
});