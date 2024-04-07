$(document).on('ready',function(){

    $('#form_login').on('submit',function (event) {
        event.preventDefault();
        var form = document.getElementById('form_login');
        var formData = new FormData(form);

        $.ajax({
            url: '/admin/login/',
            type: 'POST',
            data: formData,
            dataType: 'json',
            encode: true,
            processData: false,
            contentType: false,
            success: function (response) {
                if(response.success) {
                    $('#result').addClass("text-green-700 bg-green-100");
                    $('#result').removeClass("hidden");
                    $('#result').html(response.message);
                    window.location.href = '/admin/';
                 } else {
                    $('#result').addClass("text-red-700 bg-red-100");
                    $('#result').removeClass("hidden");
                    $('#result').html(response.message);
                 }
             },
             error: function (xhr, status, error) {
                 $('#result').addClass("text-red-700 bg-red-100");
                 $('#result').removeClass("hidden");
                 $('#result').html(error);
             }
        });


    });
});