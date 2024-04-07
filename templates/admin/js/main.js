//import '/node_modules/jquery/dist/jquery.min.js';


$(document).ready(function() {

		$('.tabscontent').tabbedContent({
				//links: 'ul.tabs li a' //
				history : false,
		});

		$.modal.defaults = {
			escapeClose: true,      // Allows the user to close the modal by pressing `ESC`
			clickClose: false,       // Allows the user to close the modal by clicking the overlay
			showClose: false,        // Shows a (X) icon/link in the top-right corner
			// HTML appended to the default spinner during AJAX requests.
			showSpinner: true,
			spinnerHtml: '<div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div>',
			modalClass: "modal",
			blockerClass: "jquery-modal",
		};

		//$('a[data-modal]').on('click',function(event) {
				//event.preventDefault();
				/*$(this).modal({
					escapeClose: false,
					clickClose: false,
 					showClose: false,
					 closeExisting: false
				});*/
  			/*this.blur(); // Manually remove focus from clicked link.
  			$.get(this.href, function(html) {
						$(html).appendTo('body').modal({
								escapeClose: false,
								clickClose: false,
								showClose: false,
								closeExisting: false
							});
				});*/

	//	});

	// Выполняем транслитерацию
    $("#generation").on('click',function() {
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
    $("a.delete").on('click',function() {
        const id_item = $(this).attr("data-id");
        const title = $(this).attr("data-title");
        const data_url = $(this).attr("data-url");
				const action = $(this).attr("data-action");
        Swal.fire({
            title: "Вы уверены?",
            html: `Высобираетесь удалить <br/><b>${title}</b>`,
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
                    data: {'id':id_item, 'action':action},
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

    if (($("#sort_menu").length > 0)){
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target), output = list.data('output');
            output.val(window.JSON.stringify(list.nestable('serialize')));
        };
        $("#sort_menu").nestable({group : 0}).on('change', updateOutput);
        updateOutput($("#sort_menu").data('output', $('#nestable-output')));
    }




   /* $('.dd').nestable({group : 0}).on('change', function (e){
        var list = e.length ? e : $(e.target), output = list.data('output');
        $('#nestable-output').val(JSON.stringify(list.nestable('serialize')));
    });*/




});