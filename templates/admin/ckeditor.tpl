<script src="/templates/admin/ckeditor/ckeditor.js"></script>

{literal}
<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function() {
        CKEDITOR.replace( 'edit', {
            extraPlugins: 'image2,uploadimage',

            filebrowserBrowseUrl: '/templates/admin/ckeditor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/templates/admin/ckeditor/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

            // Upload dropped or pasted images to the CKFinder connector (note that the response type is set to JSON).
            uploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            removeDialogTabs: 'image:advanced;link:advanced',
            height: 450,
            removeButtons: 'PasteFromWord'
        });

        //CKFinder.setupCKEditor( editor );
    });
</script>
{/literal}