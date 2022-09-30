<div class="basis-10/12 py-4 px-8 bg-gray-50">
    <h1 class="text-3xl font-bold text-gray-800">Artikel Saya</h1>

    <section id="filter">
        <div class="flex gap-3 mt-8">
        <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Semua Artikel</button>
        <button type="button" class="text-gray-900 bg-gray-200 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Artikel Minggu Ini</button>
        <button type="button" class="text-gray-900 bg-gray-200 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Artikel Terjadwal</button>
        </div>
    </section>

    <section id="content">
    <div class="overflow-x-auto relative mt-3">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-gray-900 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    #
                </th>
                <th scope="col" class="py-3 px-6">
                    Cover
                </th>
                <th scope="col" class="py-3 px-6">
                    Judul
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Posting
                </th>
                <th scope="col" class="py-3 px-6">
                    Kategori
                </th>
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($contentuser as $content) : ?>
            <tr class=" dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="py-4 px-6">
                    <img src="<?= base_url('assets/img/content/') . $content['coverImage']; ?>" alt="">
                </td>
                <td class="py-4 px-6">
                    <?= $content['title']; ?>
                </td>
                <td class="py-4 px-6">
                    Laptop
                </td>
                <td class="py-4 px-6">
                    $2999
                </td>
            </tr>
            <?php  endforeach; ?>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="py-4 px-6">
                    White
                </td>
                <td class="py-4 px-6">
                    Laptop PC
                </td>
                <td class="py-4 px-6">
                    $1999
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="py-4 px-6">
                    Black
                </td>
                <td class="py-4 px-6">
                    Accessories
                </td>
                <td class="py-4 px-6">
                    $99
                </td>
            </tr>
        </tbody>
    </table>
</div>
    </section>

</div>
        

      

                <!-- Begin Page Content -->
                <!-- <div class="container-fluid"> -->

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-4 text-gray-800">Artikel Saya</h1>

                    <div class="card mb-3" style="max-width: 540px">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/profile/') . $user['image'];?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['name']; ?></h5>
                                <p class="card-text"><?= $user['email']; ?></p>
                                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
        </div>
</div>

                </div> -->
                <!-- /.container-fluid -->

            <!-- </div> -->
            <!-- End of Main Content -->

            </div>
</section>