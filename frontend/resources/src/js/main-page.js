var MainPage = {
    subjectList: [],
    subjectAgeList: [],
    launchModal: function (listType) {
        if (listType === undefined) listType = 'subject';
        var itemList = this.subjectList;
        if (listType === 'subjectAge') itemList = this.subjectAgeList;
        var targetSelect = $("#order-subject");
        targetSelect.html('');
        for (var i = 0; i < itemList.length; i++) {
            targetSelect.append('<option value="' + itemList[i].id + '">' + itemList[i].name + '</option>');
        }
        if ($("#order_form_body").hasClass("hidden")) grecaptcha.reset();
        $("#order_form_body").removeClass("hidden").find("input[name='order[type]']").val(listType);
        $("#order_form_extra").html('').addClass("hidden");
        $("#order_form").find(".modal-footer").removeClass("hidden");
        $("#order_form").modal();
    },
    completeOrder: function(form) {
        var gToken = grecaptcha.getResponse();
        if (gToken.length === 0) return false;
        $("#order_form").find("button.btn-primary").prop("disabled", true);
        $.ajax({
            url: $(form).attr('action'),
            method: 'post',
            dataType: 'json',
            data: $(form).serialize(),
            success: function (data) {
                if (data.status === 'ok') {
                    $("#order_form_body").addClass("hidden");
                    $("#order_form").find(".modal-footer").addClass("hidden");
                    Main.throwFlashMessage("#order_form_extra", 'Ваша заявка принята. Наши менеджеры свяжутся с вами в ближайшее время.', 'alert-success');
                } else {
                    Main.throwFlashMessage("#order_form_extra", 'Не удалось отправить заявку: ' + data.errors , 'alert-danger');
                    grecaptcha.reset();
                }
                $("#order_form_extra").removeClass("hidden");
                $("#order_form").find("button.btn-primary").prop("disabled", false);
            },
            error: function (xhr, textStatus, errorThrown) {
                Main.throwFlashMessage("#order_form_extra", 'Произошла ошибка при отправке заявки. Вы также можете оставить заявку по телефону.', 'alert-danger');
                $("#order_form_extra").removeClass("hidden");
                $("#order_form").find("button.btn-primary").prop("disabled", false);
            }
        });
        return false;
    },
    init: function() {
        $("#order-phone").inputmask({"mask": "99 999-9999"});
    }
};