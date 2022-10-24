<div class="basis-8/12 " id="content">

    <div class="mt-4 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <form action="<?= base_url('tautan/prosesedit'); ?>" method="post">
            <?php if (validation_errors() == true): ?>
                <div class="px-4 py-3 mb-3 text-md text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="font-semibold"><?= $this->session->flashdata('error'); ?></span> 
                </div>
     
                
            <?php endif; ?>
            <?php foreach($tautan as $t) : ?>
            <input type="hidden" class="" name="username" value="<?= $user['username']; ?>">
            <div class="mb-6">
                <label for="title" class="block mb-2  font-semibold text-gray-900 dark:text-gray-300">Judul Tautan</label>
                <input type="text" name="title" value="<?= $t['title']; ?>" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Judul Artikel..">
                <?= form_error('title', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
            </div>
            <div class="mb-6">
                <label for="tautan" class="block mb-2  font-semibold text-gray-900 dark:text-gray-300">URL (Link Tautan)</label>
                <input type="text" name="tautan" id="tautan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan tautan Tautan.." value="<?= $t['tautan']; ?>">
                <?= form_error('tautan', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
            </div>
            <div class="mb-6">
                <label for="category" class="block mb-2 font-semibold text-gray-900 dark:text-gray-400">Kategori</label>
                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option  value="inti" <?= (($t['category'] == 'inti' ) ? "selected":"") ?>>Inti</option>
                    <option value="koperasi" <?= (($t['category'] == 'koperasi' ) ? "selected":"") ?>>Koperasi</option>
                    <option value="serikatkerja" <?= (($t['category'] == 'serikatkerja' ) ? "selected":"") ?>>Serikat Kerja</option>
                </select>
            </div>
            <?php endforeach; ?>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-5 py-2.5 block dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah</button>
            

        </form>
    
    </div>
</div>

    