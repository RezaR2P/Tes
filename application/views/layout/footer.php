<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script> -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/ckeditor/ckeditor.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/lightbox2/src/js/lightbox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
     // tombol hapus
    //  $('.tombol-hapus').on('click', function(e) {
    //        e.preventDefault();

    //        const href = $(this).attr('href');


    //        Swal.fire({
    //            title: 'Apakah kamu ingin menghapus Data ini?',
    //            icon: 'warning',
    //            showCancelButton: true,
    //            confirmButtonText: 'Hapus',
    //        }).then((result) => {
    //            if (result.isConfirmed) {
    //                document.location.href = href;
    //            }
    //        });
    //    });
</script>
<script>
       const flashData = $('.flash-data').data('flashdata');
       const flashVideo = $('.flash-video').data('flashdata');
       const flashFoto = $('.flash-foto').data('flashdata');
       const flashTautan = $('.flash-tautan').data('flashdata');
       const flashComment = $('.flash-comment').data('flashdata');
       const flashAdmin = $('.flash-admin').data('flashdata');
       const flashUser = $('.flash-user').data('flashdata');

       if (flashData) {
           Swal.fire({
               title: 'Artikel Berhasil ' + flashData,
               text: '',
               icon: 'success'
           });
       }

       if (flashVideo) {
           Swal.fire({
               title: 'Video Berhasil ' + flashVideo,
               text: '',
               icon: 'success'
           });
       }

       if (flashFoto) {
           Swal.fire({
               title: 'Foto Berhasil ' + flashFoto,
               text: '',
               icon: 'success'
           });
       }

       if (flashTautan) {
           Swal.fire({
               title: 'Tautan Berhasil ' + flashTautan,
               text: '',
               icon: 'success'
           });
       }

       if (flashComment) {
           Swal.fire({
               title: 'Komentar Berhasil ' + flashComment,
               text: '',
               icon: 'success'
           });
       }

       if (flashAdmin) {
           Swal.fire({
               title: 'Admin Berhasil ' + flashAdmin,
               text: '',
               icon: 'success'
           });
       }

       if (flashUser) {
           Swal.fire({
               title: 'Akun Berhasil ' + flashUser,
               text: '',
               icon: 'success'
           });
       }


      
   </script>
   
   <script>
       const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        });

   </script>

<script>
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.replace('editor1', {
        customConfig: '<?= base_url('assets/js/customCkeditor.js')?>',
        
    });
    
    
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