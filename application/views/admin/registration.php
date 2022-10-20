<div class="basis-8/12 " id="content">

    <div class="mt-4 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <?= form_open_multipart('article/add'); ?>
            <?php if (validation_errors() == true): ?>
                <div class="px-4 py-3 mb-3 text-md text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="font-semibold"><?= $this->session->flashdata('error'); ?></span> 
                </div>
     
                
            <?php endif; ?>

            <input type="hidden" class="" name="username" value="<?= $user['username']; ?>">
            <div class="mb-6">
                <label for="title" class="block mb-2  font-semibold text-gray-900 dark:text-gray-300">Judul Artikel</label>
                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Judul Artikel.." value="<?= set_value('title'); ?>">
                <?= form_error('title', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
            </div>
            <div class="mb-6">
                <label for="category" class="block mb-2 font-semibold text-gray-900 dark:text-gray-400">Kategori</label>
                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="berita">Berita</option>
                    <option value="liputan">Liputan</option>
                    <option value="regulasi">Regulasi</option>
                    <option value="artikel">Artikel</option>
                    <option value="pengumuman">Pengumuman</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="category" class="block mb-2 font-semibold text-gray-900 dark:text-gray-400">Cover Artikel</label>
                <div class="flex gap-4">
                    <div class="basis-4/12">
                        <img src="<?= base_url('assets/'); ?>img/content/no-image.jpg" id="preview" class="border-4 border-slate-700 shadow-lg rounded-lg max-w-full">
                    </div>
                    <div class="basis-8/12 ">
                        <input type="file" name="gambar" class="file d-none">

                        <div class="input-group ">
                            <input type="text" class="form-control bg-gray-50 border border-gray-300 text-gray-900 rounded-lg" disabled placeholder="Upload Gambar" id="file">
                            <div class="input-group-append">
                                <button type="button" id="pilih_gambar" class="browse text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-r-lg text-sm px-2 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pilih Gambar</button>
                            </div>
                        </div>
                        <?= form_error('gambar', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label for="editor1" class="block mb-2  font-semibold text-gray-900 dark:text-gray-300">Konten</label>
                <textarea name="content" id="editor1" value="<?= set_value('content'); ?>"></textarea>
                <?= form_error('content', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-5 py-2.5 block dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat</button>
            

        </form>
    
    </div>
</div>


<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                    </div>
                    <?php if ($this->session->flashdata('msg_success')) { ?>
                        <div class="alert alert-success"> <?= $this->session->flashdata('msg_success') ?> </div>
                    <?php } ?>
                    <form class="user" method="post" action="<?= base_url('admin/registration'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Gmail" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>