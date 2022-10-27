<!-- Begin Page Content -->
<div class="basis-[79.1666664%] py-4 px-8  bg-gray-50 max-h-screen overflow-y-scroll">

    <!-- Page Heading -->
    <div class="w-9/12 flex justify-between">
    <h1 class="text-3xl font-bold text-gray-800">Edit Profil</h1>
    </div>

        <div class="w-9/12 shadow-lg rounded-lg bg-white mt-4 p-4">
        <form action="<?= base_url('user/prosesedit') ?>" method="post" enctype="mulripart/form-data">
                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">

                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-2/12">
                        <label for="name" class="font-semibold text-gray-900 dark:text-gray-300">Nama :</label>
                    </div>
                    <div class="basis-10/12">
                        <input type="text" name="name" id="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-2/12">
                        <label for="username" class="font-semibold text-gray-900 dark:text-gray-300">Username :</label>
                    </div>
                    <div class="basis-10/12">
                        <input type="text" name="username" id="username" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $user['username']; ?>">
                    <?= form_error('username', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-2/12">
                        <label for="email" class="font-semibold text-gray-900 dark:text-gray-300">email :</label>
                    </div>
                    <div class="basis-10/12">
                        <input type="text" name="email" id="email" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $user['email']; ?>">
                    <?= form_error('email', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <label for="avatar" class="basis-2/12 font-semibold text-gray-900 dark:text-gray-300">Avatar :</label>
                    <div class="basis-10/12 flex gap-4">
                    <div class="basis-3/12">
                        <img src="<?=  base_url('assets/img/profile/') . $user['avatar']; ?>" id="preview" class="border-4 border-slate-700 shadow-lg rounded-lg max-w-full">
                    </div>
                    <div class="basis-9/12 ">
                        <input type="file" name="gambar" class="file d-none">

                        <div class="input-group ">
                            <input type="text" class="form-control bg-gray-50 border border-gray-300 text-gray-900 rounded-lg" disabled placeholder="Upload Avatar" id="file">
                            <div class="input-group-append">
                                <button type="button" id="pilih_gambar" class="browse text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-r-lg text-sm px-2 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pilih Avatar</button>
                            </div>
                        </div>
                        <?= form_error('avatar', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-2/12"></div>
                    <div class="basis-10/12">
                        <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-5 py-2.5 block dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah</button>
                    </div>
                </div>

            </form>

        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->