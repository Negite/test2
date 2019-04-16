function initAjaxForm() {
    // console.log('ajax form init');

    var $ajaxForms = $('.ajax-form');
    // console.log($ajaxForms);

    $ajaxForms.on('submit', function (event) {
        event.preventDefault(); // отменяем отправку формы по умолчанию
        // console.dir(this);

        var postData = $(this).serializeArray(), // собираем данные формы
            actionURL = $(this).attr('action'), // получаем адрес куда отправлять
            actionMethod = $(this).attr('method'); // получаем метод отправки
            console.dir(postData);
        // console.dir(actionURL);
        // console.dir(actionMethod);
        
        var selfFrom = this;

        $.ajax({
            url: actionURL,
            method: actionMethod,
            dataType: 'json',
            data: postData,
            success: function(result) { // функция вызывается при успешном ответе сервера
                console.log(result);
                $(selfFrom).find("input").removeClass("is-invalid");
                $(selfFrom).find(".contact-form-error").html("");
                if (result.success) { 
                    alert(result.success);
                    selfFrom.reset(); // сброс полей формы
                } else if (result.error) {
                    // пример обработки ощибок
                    for (var i = 0; i < result.errors.length; i++) {
                        var $errorField = $(selfFrom).find('input[name="'+ result.errors[i].field + '"]'); // подставляем имя поле с ошибкой
                        $errorField.addClass('is-invalid'); // присваевает класс к интпуту
                        $errorField.next().html(result.errors[i].error);
                    }
                //    alert(result.error);
                }
            },
            error: function (result) { // функция вызывается при ошибке запроса на сервер
                console.log(result);
            }
        })
        
    });
}

$(document).ready(function() {
    initAjaxForm();
});

/* Ответ при успешной отправке */
var resultSuccess = {
    status: 'success',
    successMessage: 'Ваши данные получены, спасибо за обращение', // выводить данное сообщение в попапе
};

/* Ответ при ошибочной отправке */
var resultError = {
    status: 'error',
    errors: [ // список не верно заполненных полей и соот-щих ошибок
        {
            field: 'username',
            error: 'слишком короткое имя'
        },
        {
            field: 'phone',
            error: 'не верный формат номера телефона'
        },
    ]
}