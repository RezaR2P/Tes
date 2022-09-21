<div class="col-md-8 " id="content">
    <hr>
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
                    <div class="col-sm-12">


                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/content/no-image.jpg') ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label for="image" class="custom-file-label">Pilih Avatar</label>
                                </div>
                            </div>
                            <?= form_error('images', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>





                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Konten</label>
                    <input type="hidden" name="content" value="<?= set_value('content') ?>">
                    <div id="editor" style="min-height: 160px;"><?= set_value('content') ?></div>

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
</div>


</div>