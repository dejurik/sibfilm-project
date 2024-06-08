$( document ).ready(function () {

    $('.popup-gallery').magnificPopup({
        type:'image',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
    });

    $('#edit_profile input[type=file]').on('change', function(){
        $('#avatar_file_name').html($(this)[0].files[0].name);
        var info = $(this).parent().parent();
        info.removeClass("opacity-0 h-0");
        info.addClass("h-full opacity-100");
    });


});

var menu = document.getElementById('menu');
function toggleMenu() {
    menu.classList.toggle('hidden');
}

$('#form_login').on('submit',function (event) {
    event.preventDefault();
    $('#login_result').removeClass("text-green-700 bg-green-100 text-red-700 bg-red-100");
    var form = document.getElementById('form_login');
    var formData = new FormData(form);

    $.ajax({
        url: '/users/login/',
        type: 'POST',
        data: formData,
        dataType: 'json',
        encode: true,
        processData: false,
        contentType: false,
        success: function (response) {
            if(response.success) {
                $('#login_result').addClass("text-green-700 bg-green-100");
                $('#login_result').removeClass("hidden");
                $('#login_result').html(response.message);
                window.location.href = '/users/';
            } else {
                $('#login_result').addClass("text-red-700 bg-red-100");
                $('#login_result').removeClass("hidden");
                $('#login_result').html(response.message);
            }
        },
        error: function (xhr, status, error) {
            $('#login_result').addClass("text-red-700 bg-red-100");
            $('#login_result').removeClass("hidden");
            $('#login_result').html(error);
        }
    });


});


$('#form_register').on('submit',function (event) {
    event.preventDefault();
    $('#register_result').removeClass("text-green-700 bg-green-100 text-red-700 bg-red-100");
    var form = document.getElementById('form_register');
    var formData = new FormData(form);

    $.ajax({
        url: '/users/register/',
        type: 'POST',
        data: formData,
        dataType: 'json',
        encode: true,
        processData: false,
        contentType: false,
        success: function (response) {
            if(response.success) {
                $('#register_result').addClass("text-green-700 bg-green-100");
                $('#register_result').removeClass("hidden");
                $('#register_result').html(response.message);
                window.location.href = '/users/';
            } else {
                $('#register_result').addClass("text-red-700 bg-red-100");
                $('#register_result').removeClass("hidden");
                $('#register_result').html(response.message);
            }
        },
        error: function (xhr, status, error) {
            $('#register_result').addClass("text-red-700 bg-red-100");
            $('#register_result').removeClass("hidden");
            $('#register_result').html(error);
        }
    });


});

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
        captcha: "required",
    },
    // Specify validation error messages
    messages: {
        name: "Пожалуйста, введите ваше имя",
        phone: "Пожалуйста, введите ваш телефон",
        privacy: "Пожалуйста, подтвердите отправку персональных данных",
        email: "Пожалуйста, введите ваше имя email",
        captcha: "Введите защитный код"
    },
    errorClass: "border-red-500 text-red-500 italic order-1",
    errorElement: "p",

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        var formData = new FormData(form);
        $('#feedback_result').removeClass("border-[#34445d] bg-[#979eab] border-[#7a5050] bg-[#d59595]").addClass("hidden");
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
                    //location.reload();
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