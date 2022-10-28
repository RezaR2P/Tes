<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

<div class="basis-[79.1666664%] py-4 px-8  bg-gray-50 max-h-screen overflow-y-scroll">
    <h1 class="text-3xl font-bold text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>

        </div>
    </div>

    <section id="content">

        <div class="overflow-x-auto relative mt-5">
            <?php if(empty($article)) : ?>
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">Data Masih Kosong!</span>
                </div>
            <?php endif; ?>
            <table class="w-full text-sm text-left text-gray-500 bg-white rounded-lg dark:text-gray-400">
                <thead class="text-gray-900 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="py-3 px-6">
                            Cover
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Judul
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Username
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Tanggal Posting
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Kategori
                        </th>
                        
                        <th scope="col" class="py-3 px-6 text-center">
                            Hapus
                        </th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach ($article as $content) : ?>

                        <tr class=" dark:bg-gray-800">

                            <td class="py-4 px-6">
                                <img class="border-4 border-slate-700 shadow-lg rounded-lg mx-auto w-auto max-h-48" src="<?= base_url('assets/img/content/') . $content['coverImage']; ?>" alt="">
                            </td>
                            <td class="py-4 px-6 text-slate-600">
                                <?= $content['title']; ?>
                            </td>
                            <td class="py-4 px-6 text-slate-600">
                                <?= $content['username']; ?>
                            </td>
                            <td class="py-4 px-6 text-slate-600 text-center">
                                <?= date('Y-m-d h:i:s', $content['date']); ?>
                            </td>
                            <td class="py-4 px-6 text-slate-600 text-center">
                                <?= $content['category']; ?>
                            </td>
                           
                            <td class="py-4 px-6">
                                <a href="<?= base_url('article/delete/') . $content['id_article']; ?>"><button type="button" class="tombol-hapus cursor-pointer mx-auto text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Hapus</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </section>

</div>