<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

<div class="basis-[79.1666664%] py-4 px-8  bg-gray-50 max-h-screen overflow-y-scroll">
    <h1 class="text-3xl font-bold text-gray-800"><?= $title; ?></h1>

    <section id="filter">
        <div class="flex gap-3 mt-8">
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Semua Artikel</button>
            <button type="button" class="text-gray-900 bg-gray-200 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Artikel Minggu Ini</button>
            <button type="button" class="text-gray-900 bg-gray-200 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Artikel Terjadwal</button>
        </div>
    </section>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>

        </div>
    </div>

    <section id="content">

        <div class="overflow-x-auto relative mt-3">
            <table class="w-full text-sm text-left text-gray-500 bg-white rounded-lg dark:text-gray-400">
                <thead class="text-gray-900 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="py-3 px-6 text-center">
                            Photo
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Judul
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Tanggal Posting
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Edit
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Hapus
                        </th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach ($photo as $p) : ?>

                        <tr class=" dark:bg-gray-800">

                            <td class="py-4 px-6">
                                <img class="border-4 border-slate-700 shadow-lg rounded-lg mx-auto w-auto max-h-48" src="<?= base_url('assets/img/photo/') . $p['photo']; ?>" alt="">
                            </td>
                            <td class="py-4 px-6 text-slate-600">
                                <?= $p['title']; ?>
                            </td>
                            <td class="py-4 px-6 text-slate-600 text-center">
                                <?= date('Y-m-d', $p['date_created']); ?>
                                <br>
                                <?= date('h:i:s', $p['date_created']); ?>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <a href="<?= base_url('photo/edit/') . $p['id_photo']; ?>"><button type="button" class="mx-auto text-slate-700 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-8 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Edit</button></a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="<?= base_url('photo/delete/') . $p['id_photo']; ?>"><input type="button" class="cursor-pointer mx-auto text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" value="Hapus" name="deleteArticle"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </section>

</div>