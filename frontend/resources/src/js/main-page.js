var MainPage = {
    activeForm: null,
    targetDate: null,
    nowDate: null,
    setTimeRemaining: function() {
        if (this.targetDate !== null && this.nowDate !== null) {
            var t = this.targetDate - this.nowDate;
            this.nowDate.setSeconds(this.nowDate.getSeconds() + 1);
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            $(".remain-time-block").each(function () {
                $(this).find(".remain-day").text(days < 0 ? 0 : days);
                $(this).find(".remain-hour").text(hours < 0 ? 0 : hours);
                $(this).find(".remain-minute").text(minutes < 0 ? 0 : minutes);
                $(this).find(".remain-second").text(seconds < 0 ? 0 : seconds);
            });
        }
    },
    launchModal: function () {
        var orderForm = $("#order_form");
        var orderFormBody = $(orderForm).find(".order_form_body");
        if ($(orderFormBody).hasClass("hidden")) grecaptcha.reset();
        $(orderFormBody).removeClass("hidden");
        $(orderForm).find(".order_form_extra").html('').addClass("hidden");
        $(orderForm).find(".modal-footer").removeClass("hidden");
        $(orderForm).modal();
    },
    completeOrder: function(form) {
        var gToken = grecaptcha.getResponse();
        if (gToken.length === 0) return false;
        $(".order_form").each(function() {
            $(this).find("button.complete-button").prop("disabled", true);
        });
        this.activeForm = $(form);
        $.ajax({
            url: $(form).attr('action'),
            method: 'post',
            dataType: 'json',
            data: $(form).serialize(),
            success: function (data) {
                if (data.status === 'ok') {
                    $(MainPage.activeForm).find(".order_form_body").addClass("hidden");
                    $(MainPage.activeForm).find(".modal-footer").addClass("hidden");
                    Main.throwFlashMessage($(MainPage.activeForm).find(".order_form_extra"), 'Ваша заявка принята. Наши менеджеры свяжутся с вами в ближайшее время.', 'alert-success');
                } else {
                    Main.throwFlashMessage($(MainPage.activeForm).find(".order_form_extra"), 'Не удалось отправить заявку: ' + data.errors, 'alert-danger');
                    grecaptcha.reset();
                }
                $(MainPage.activeForm).find(".order_form_extra").removeClass("hidden");
                $(MainPage.activeForm).find("button.complete-button").prop("disabled", false);
            },
            error: function (xhr, textStatus, errorThrown) {
                Main.throwFlashMessage($(MainPage.activeForm).find(".order_form_extra"), 'Произошла ошибка при отправке заявки. Вы также можете оставить заявку по телефону.', 'alert-danger');
                $(MainPage.activeForm).find(".order_form_extra").removeClass("hidden");
                $(MainPage.activeForm).find("button.complete-button").prop("disabled", false);
            }
        });
        return false;
    },
    init: function() {
        $(".order-phone").inputmask({"mask": "99 999-9999"});
    }
};