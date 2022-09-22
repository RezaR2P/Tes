<div class="col-md-8 " id="content">

    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('article/add'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="username" value="<?= $user['username']; ?>">
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" name="title" id="judul" placeholder="Cara Menjadi Tampan">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="form-control" id="category" name="category">
                        <option value="berita">Berita</option>
                        <option value="artikel">Artikel</option>
                        <option value="pengumuman">Pengumuman</option>

                    </select>
                    <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="mainImage" class="col-form-label">Gambar Utama :</label>


                    <!-- 
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="gambar/80x80.png" id="preview" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="image">
                                    <label for="image" id="pilih_gambar" class="custom-file-label">Pilih Gambar</label>
                                </div>
                            </div>
                            <?= form_error('images', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?= base_url('assets/'); ?>img/content/no-image.jpg" id="preview" class="img-thumbnail">

                        </div>
                        <div class="col-sm-8">
                            <input type="file" name="gambar" class="file d-none">
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="file">
                                <div class="input-group-append">
                                    <button type="button" id="pilih_gambar" class="browse btn btn-primary">Pilih Gambar</button>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Konten</label>
                    <input type="hidden" name="content" value="<?= set_value('content') ?>">
                    <textarea name="editor1" id="editor1" name="content">

                    </textarea>

                    <?= form_error('content', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
        </div>


        <!-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="comments">
                            <label class="custom-control-label" for="comments" name="comments" value="1">Aktifkan Komentar?</label>
                            </div> -->

        <input class="btn btn-primary mt-4 w-50 mx-auto btn-block" type="submit" name="btn" value="Buat" />


        </form>

    </div>
</div>