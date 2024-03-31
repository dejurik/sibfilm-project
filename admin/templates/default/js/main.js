$(document).ready(function() {
    // Выполняем транслитерацию
    $("#generation").click(function() {
        var space = '-';
        var transl = {
            'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
            'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
            'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
            'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space, 'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya',
            ' ': space, '_': space, '`': space, '~': space, '!': space, '@': space,
            '#': space, '$': space, '%': space, '^': space, '&': space, '*': space,
            '(': space, ')': space,'-': space, '\=': space, '+': space, '[': space,
            ']': space, '\\': space, '|': space, '/': space,'.': space, ',': space,
            '{': space, '}': space, '\'': space, '"': space, ';': space, ':': space,
            '?': space, '<': space, '>': space, '№':space, '«':'', '»':''
        }
        var title = $('#title').val().toLowerCase();
        var result = '';
        var curent_sim = '';

        for(i=0; i < title.length; i++) {
            if(transl[title[i]] != undefined) {
                if(curent_sim != transl[title[i]] || curent_sim != space){
                    result += transl[title[i]];
                    curent_sim = transl[title[i]];
                }
            }
            else {
                result += title[i];
                curent_sim = title[i];
            }
        }

        result = result.replace(/^-/, '');
        result = result.replace(/-$/, '');
        $('#url').val(result);
        return false;
    });

    // Удалить заказ
    $("a.delete").click(function() {
        const id_item = $(this).attr("data-id");
        const title = $(this).attr("data-title");
        const data_url = $(this).attr("data-url");
        Swal.fire({
            title: "Вы уверены?",
            html: `Высобираетесь удалить страницу<br/><b>${title}</b>`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Нет",
            confirmButtonText: "Да, удалить!"
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: data_url,
                    type: 'POST',
                    data: {'id':id_item, 'action':'delete'},
                    dataType: 'json',
                    success: function (response) {
                        if(response.success) {
                            Swal.fire({
                                title: "Удалена!",
                                text: response.message,
                                icon: "success"
                            });
                            window.location.href = data_url;
                        }
                    },
                    error: function (xhr, status, error) {
                        Swal.fire({
                            icon: "error",
                            title: "Упс...",
                            text: "Что то пошло не так!"
                        });
                    }
                });


            }
        });

    });



});