<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script> -->
<script src="<?= base_url('assets/'); ?>vendor/ckeditor/ckeditor.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.replace('editor1', {
        customConfig: '<?= base_url('assets/js/customCkeditor.js')?>'
    });
    
    // let quill = new Quill('#editor', {
    //     theme: 'snow',
    //     modules: {
    //         toolbar: [
    //             [{
    //                 font: []
    //             }],
    //             ["bold", "italic"],
    //             ["link", "blockquote", "code-block", "image", "align"],
    //             [{
    //                 list: "ordered"
    //             }, {
    //                 list: "bullet"
    //             }],
    //             [{
    //                 'align': []
    //             }],
    //         ]

    //     },
    //     placeholder: 'Masukkan Konten artikel disini.....',
    // });

    // quill.on('text-change', function(delta, oldDelta, source) {
    //     document.querySelector("input[name='content']").value = quill.root.innerHTML;
    // });
</script>
<script>
    // $('.custom-file-input').on('change', function() {
    //     let fileName = $(this).val().split('\\').pop();
    //     $(this).next('.custom-file-label').addClass("selected").html(fileName);
    // });
    $(document).on("click", "#pilih_gambar", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });

    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    let reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    
</script>

</body>

</html>