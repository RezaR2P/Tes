<div class="flash-video" data-flashdata="<?= $this->session->flashdata('videoSuccess'); ?>"></div>

<div class="basis-[79.1666664%] py-4 px-8  bg-gray-50 max-h-screen overflow-y-scroll">
    <h1 class="text-3xl font-bold text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>

        </div>
    </div>

    <section id="content">

        <div class="overflow-x-auto relative mt-5">
            <?php if(empty($video)) : ?>
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">Data Masih Kosong!</span>
                </div>
            <?php endif; ?>
            <table class="w-full text-sm text-left text-gray-500 bg-white rounded-lg dark:text-gray-400">
                <thead class="text-gray-900 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="py-3 px-6 text-center">
                            Video
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Judul
                        </th>
                        <th scope="col" class="py-3 px-6">
                            URL
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Username
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Tanggal Posting
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Hapus
                        </th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach ($video as $v) : ?>

                        <tr class=" dark:bg-gray-800">

                            <td class="py-4 px-6">
                            <?php $url = explode("/", $v['url']); ?>
                                <iframe class="shadow-lg rounded-lg w-48 h-auto" src="https://www.youtube.com/embed/<?= $url[3]; ?>" title="<?= $v['title']; ?>" frameborder="0" encrypted-media; gyroscope; picture-in-picture></iframe>
                            </td>
                            <td class="py-4 px-6 text-slate-600">
                                <?= $v['title']; ?>
                            </td>
                            <td class="py-4 px-6 text-slate-600">
                                <?= $v['url']; ?>
                            </td>
                             <td class="py-4 px-6 text-slate-600">
                                <?= $v['username']; ?>
                            </td>
                            <td class="py-4 px-6 text-slate-600 text-center">
                                <?= date('Y-m-d', $v['date_created']); ?>
                                <br>
                                <?= date('h:i:s', $v['date_created']); ?>
                            </td>
                            <td class="py-4 px-6">
                                <a href="<?= base_url('video/delete/') . $v['id_video']; ?>"><button type="button" class="tombol-hapus cursor-pointer mx-auto text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" >Hapus</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </section>

</div>