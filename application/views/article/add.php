<div class="col-md-8 " id="content">
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('article/add'); ?>" method="post">
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" name="title" id="judul" placeholder="Cara Menjadi Tampan">
                </div>
                a
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="form-control" id="category" name="category">
                        <option value="berita">Berita</option>
                        <option value="artikel">Artikel</option>
                        <option value="pengumuman">Pengumuman</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="mainImage" class="col-form-label">Gambar Utama :</label>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/content/no-image.jpg'); ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="mainImage" name="mainImage">
                                    <label for="mainImage" class="custom-file-label">Pilih Gambar Utama</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="content">Konten Artikel</label>
                    <textarea class="form-control" id="content" rows="12" placeholder="Masukkan isi artikel disini....." name="content"></textarea>
                </div>

                <!-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="comments">
                            <label class="custom-control-label" for="comments" name="comments" value="1">Aktifkan Komentar?</label>
                            </div> -->

                <input class="btn btn-primary mt-4 w-50 mx-auto btn-block" type="submit" name="btn" value="Buat" />


            </form>

        </div>
    </div>


</div>