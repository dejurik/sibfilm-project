$( document ).ready(function () {

    $('.popup-gallery').magnificPopup({
        type:'image',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
    });


});

var menu = document.getElementById('menu');
function toggleMenu() {
    menu.classList.toggle('hidden');
}

$("#form_feedback").validate({
    // Specify validation rules
    rules: {
        name: "required",
        phone: "required",
        email: {
            required: true,
            email: true
        },
        privacy: "required",
    },
    // Specify validation error messages
    messages: {
        name: "Пожалуйста, введите ваше имя",
        phone: "Пожалуйста, введите ваш телефон",
        privacy: "Пожалуйста, подтвердите отправку персональных данных",
        email: "Пожалуйста, введите ваше имя email"
    },
    errorClass: "border-red-500 text-red-500 text-xs italic order-1",
    errorElement: "p",

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        var formData = new FormData(form);
        $.ajax({
            url: '/?mod=feedback&act=create_ticket',
            type: 'POST',
            data: formData,
            dataType: 'json',
            encode: true,
            processData: false,
            contentType: false,
            success: function (response) {
                if(response.success) {
                    $('#feedback_result').removeClass("hidden");
                    $('#feedback_result').addClass("border-[#34445d] bg-[#979eab]");
                    $('#feedback_result').children().html(response.message);
                    location.reload();
                } else {
                    $('#feedback_result').addClass("border-[#7a5050] bg-[#d59595]");
                    $('#feedback_result').removeClass("hidden");
                    $('#feedback_result').children().html(response.message);
                    location.reload();
                }
            },
            error: function (xhr, status, error) {
                $('#feedback_result').addClass("border-[#7a5050] bg-[#d59595]");
                $('#feedback_result').removeClass("hidden");
                $('#feedback_result').children().html(error);
                location.reload();
            }
        });
       // form.submit();
    }
});


