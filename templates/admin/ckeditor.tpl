<script src="/templates/admin/ckeditor/ckeditor.js"></script>

{literal}
<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function() {
        $('.editor').each(function () {
            CKEDITOR.replace($(this).prop('id'), {
                extraPlugins: 'image2,uploadimage',
                filebrowserBrowseUrl: '/templates/admin/ckeditor/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl: '/templates/admin/ckeditor/ckfinder/ckfinder.html?type=Images',
                filebrowserUploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                uploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                removeDialogTabs: 'image:advanced;link:advanced',
                height: 350,
                removeButtons: 'PasteFromWord'
            });
        });


        //CKFinder.setupCKEditor( editor );
    });
</script>
{/literal}