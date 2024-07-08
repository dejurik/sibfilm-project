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

    $("#gen_password").on('click',function() {
        var length = 10,
            charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz~!@-#$",
            result = '',
            input = $('#password');
            input.val('');

        if(window.crypto && window.crypto.getRandomValues) {
            result = Array(length)
                .fill(charset)
                .map(x => x[Math.floor(crypto.getRandomValues(new Uint32Array(1))[0] / (0xffffffff + 1) * (x.length + 1))])
                .join('');
        } else {
            for (var i = 0, n = charset.length; i < length; ++i) {
                result += charset.charAt(Math.floor(Math.random() * n));
            }
        }
        input.val(result);
        return false
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
                                title: "Запись удалена!",
                                text: response.message,
                                icon: "success",
                            }).then((result2) => {
                                if (result2.isConfirmed) {
                                    window.location.href = data_url;
                                }
                            });
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

    if (($("#sort_variant").length > 0)){
        $('#sort_variant').nestable({maxDepth: 1});
    }



    // Добавление нового свойства товара
    var feature = $('#new_feature').clone(true);
    $('#new_feature').remove().removeAttr('id');
    $('#addFeature').click(function () {
        $(feature).clone(true).appendTo('div.new_features').fadeIn('slow');
        return false;
    });

    // Добавление нового свойства товара
    var variant = $('#new_variant').clone(true);
    $('#new_variant').remove().removeAttr('id');

    $('#addVariant').click(function () {
        var variant_id = parseInt($(this).attr("data-variants-count")),
            new_variant = $(variant).clone(true);

        $(new_variant).find('input.name').attr('name','new_variants[name][n'+variant_id+']');
        $(new_variant).find('input.duration').attr('name','new_variants[duration][n'+variant_id+']');
        $(new_variant).find('input.author').attr('name','new_variants[author][n'+variant_id+']');

        $(new_variant).appendTo('#variants_list').fadeIn('slow')
            .find('button.attach_images').attr("data-variant",'n'+variant_id)
            .next( "button.attach_files" ).attr("data-variant",'n'+variant_id);

        var images_container = $(new_variant).find('[id^="images-container-"]').attr("id","images-container-n"+variant_id),
            files_container = $(new_variant).find('[id^="files-container-"]').attr("id","files-container-n"+variant_id);
        $(images_container).find('div').each(function (index) {
            var new_image_list = $(this).find('input').attr('id');
            $(this).find('input').attr({ name:'new_variants[images][n'+variant_id+'][]', id:new_image_list+'-n'+variant_id });
            $(this).find('label').attr('for',new_image_list+'-n'+variant_id);
        });
        $(files_container).find('div').each(function (index) {
            var new_file_list = $(this).find('input').attr('id');
            $(this).find('input').attr({ name:'new_variants[files][n'+variant_id+'][]', id:new_file_list+'-n'+variant_id });
            $(this).find('label').attr('for',new_file_list+'-n'+variant_id);
        });

        $(this).attr("data-variants-count",variant_id+1);
        return false;
    });

    // Удаление варианта
    $(document).on('click', '.delete_variant', function () {
        if ($("#variants_list li").length > 1) {
            $(this).closest("li").fadeOut(200, function () { $(this).remove(); })
        }
    });

    // Открыть картинки для варинта
    $(document).on('click', '.attach_images', function () {
        $('#images-container-'+$(this).attr("data-variant")).toggleClass( "hidden" );
    });

    // Открыть файлы для варинта
    $(document).on('click', '.attach_files', function () {
        $('#files-container-'+$(this).attr("data-variant")).toggleClass( "hidden" );
    });

    // Выделить картинку для варинта
    $(document).on('click', '[id^="image-list-"]', function () {
        $(this).parent().toggleClass( "border-blue-400 bg-blue-100" );
        $(this).parent().toggleClass( "bg-slate-100" );
    });

    // Выделить файл для варианта
    $(document).on('click', '[id^="file-list-"]', function () {
        $(this).parent().toggleClass( "border-blue-400 bg-blue-100" );
        $(this).parent().toggleClass( "bg-slate-100" );
    });

    // Удаление изображений
    $(document).on('click', '.delete_image_product', function () {
        $(this).closest('div.li-image').fadeOut(200, function () {
            $(this).remove();
        });
        return false;
    });
    // Удаление файлов
    $(document).on('click', '.delete_file_product', function () {
        $(this).closest('div.li-file').fadeOut(200, function () {
            $(this).remove();
        });
        return false;
    });

    // Переименовать файл
    $(document).on('click', '.rename_file', function () {
        $(this).closest(".li-file").find(".editSpan").hide();
        $(this).closest(".li-file").find(".editInput").show();
        $(this).closest(".li-file").find(".rename_file").hide();
        $(this).closest(".li-file").find(".delete_file_product").hide();
        $(this).closest(".li-file").find(".save_name_file").show();
        $(this).closest(".li-file").find(".cancel").show();
        return false;
    });

    // Сохранить имя файла
    $(document).on('click', '.save_name_file', function () {
        var divObj = $(this).closest(".li-file");
        var ID = $(this).attr("data-id-file");
        var description = $(this).closest(".li-file").find(".editInput").val();

        $.ajax({
            url: '/admin/?mod=config&act=rename_file',
            type: 'POST',
            data: {'id':ID, 'description':description},
            dataType: 'json',
            success: function (response) {
                if(response.success) {
                    divObj.find(".editSpan").text(response.description).show();
                    divObj.find(".editInput").hide();
                    divObj.find(".rename_file").show();
                    divObj.find(".delete_file_product").show();
                    divObj.find(".save_name_file").hide();
                    divObj.find(".cancel").hide();
                    Swal.fire({
                        title: "Успешно!",
                        text: response.message,
                        icon: "success",
                    });
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
        return false;
    });

    // Отмена переименовывать файл
    $(document).on('click', '.cancel', function () {
        $(this).closest(".li-file").find(".editSpan").show();
        $(this).closest(".li-file").find(".editInput").hide();
        $(this).closest(".li-file").find(".rename_file").show();
        $(this).closest(".li-file").find(".delete_file_product").show();
        $(this).closest(".li-file").find(".save_name_file").hide();
        $(this).closest(".li-file").find(".cancel").hide();
        return false;
    });


    if (($("#multi-uploads-files").length > 0)){

        var list = $('#list');

        var uploader = new plupload.Uploader({
            runtimes: "html5",
            browse_button : 'multi-uploads-files',
            url : '/admin/?mod=shop&act=uploads_files',
            chunk_size: "25mb",
            unique_names: true,
            multipart_params: {
                "page_id": list.attr("data-page-id"),
                "module_id": list.attr("data-module-id")
            },
            filters : {
                max_file_size : '2000mb',
                mime_types: [
                    {title : "Image files", extensions : "jpg,gif,png"},
                    {title : "Video files", extensions : "mov,avi"},
                    {title : "Audio files", extensions : "mp3"}
                ]
            },

            init: {
                PostInit: () => list.html("<div class='text-slate-500 w-full'>Прикрепленные файлы</div>"),
                FilesAdded: function(up, files) {
                    list.removeClass("hidden");
                    plupload.each(files, function(file) {
                       $('<div class="text-slate-500 w-full" id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <span class="text-gray-400 order-last mb-0 float-right"></span></div>').appendTo('#list').fadeIn('slow');
                    });
                     $('#uploadfiles').on("click", function() {
                         uploader.start();
                         return false;
                     });
                },
                UploadProgress: (up, file) => {
                    document.getElementById(file.id).getElementsByTagName('span')[0].innerHTML = file.percent + "%";
                },
                UploadComplete: function() {
                    location.reload();
                    //$("#product_form").submit();
                },
                Error: (up, err) => console.error(err)
            }
        });
        uploader.init();
    }

    if (($('.cropme').length > 0)){
        $('.cropme').simpleCropper();
    }


});



// $('.dropdown').each(function(){
//     var $this = $(this);
//    // console.log(dropdown);
//     $this.children('.dropdown-toggle').each(function() {
//         $(this).on('click',function() {
//             console.log($this);
//             this.addClass("block");
//             console.log(this);
//         });
//
//     });
// });


//
// $('.dropdown').each(function (index) {
//     $(this).find('.dropdown-toggle').each(function(subI,subitem) {
//         subitem.addEventListener("click", function (event) {
//             subitem.classList.toggle("block");
//             if (subitem.classList.contains("block") != true) {
//                 $(this).find(".dropdown-menu").removeClass("block")
//                 $(this).find(".dropdown-menu").addClass("hidden")
//             } else {
//                 dismissDropdownMenu()
//                 $(this).find(".dropdown-menu").addClass("block")
//                 $(this).find(".dropdown-menu").removeClass("hidden")
//                 if ($(this).find(".dropdown-menu").hasClass("block")) {
//                     subitem.classList.add("block")
//                 } else {
//                     subitem.classList.remove("block")
//                 }
//                 event.stopPropagation();
//             }
//         });
//
//     });
// });

document.querySelectorAll(".dropdown").forEach(function (item) {
    item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
        subitem.addEventListener("click", function (event) {
            subitem.classList.toggle("block");
            if (subitem.classList.contains("block") != true) {
                item.querySelector(".dropdown-menu").classList.remove("block")
                item.querySelector(".dropdown-menu").classList.add("hidden")
            } else {
                dismissDropdownMenu()
                item.querySelector(".dropdown-menu").classList.add("block")
                item.querySelector(".dropdown-menu").classList.remove("hidden")
                if (item.querySelector(".dropdown-menu").classList.contains("block")) {
                    subitem.classList.add("block")
                } else {
                    subitem.classList.remove("block")
                }
                event.stopPropagation();
            }
        });
    });
});

function dismissDropdownMenu() {
    $(".dropdown-menu").removeClass("block");
    $(".dropdown-menu").addClass("hidden");
    $(".dropdown-toggle").removeClass("block");
}

window.addEventListener('click', function (e) {
    dismissDropdownMenu();
});