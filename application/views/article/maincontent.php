<div class="flash-comment" data-flashdata="<?= $this->session->flashdata('commentSuccess'); ?>"></div>
<div class="basis-8/12 mt-4" id="maincontent">
    <h2 class="text-4xl"><?= $content->title; ?></h2>
    <p class="text-sm mb-2"><?= $content->username; ?> - <?= date('d F Y', $content->date); ?></p>
    <a href="" data-lightbox="<?= $content->coverImage; ?>" data-alt="<?= $content->coverImage; ?>">
    <?php $type = explode(".", $content->coverImage); ?>
    <?php if($type[1] == 'pdf') : ?>
        <?php
            $imagick = new Imagick(base_url('assets/img/content/'). $content->coverImage . '[0]');
            $imagick->readImage(base_url('assets/img/content/') . $type[0].'.pdf');
        ?>
        <iframe src="<?= base_url('assets/img/content/') . $content->coverImage; ?>#toolbar=0" class="mx-auto w-auto h-96 overflow-y-hidden rounded-lg shadow-xl"></iframe>
    <?php else : ?>
        <img src="<?= base_url('assets/img/content/') . $content->coverImage; ?>" class="mx-auto w-auto max-h-[28rem] rounded-lg shadow-xl dark:shadow-gray-800" alt="Responsive image">
    <?php endif; ?>
    </a>
    <div class="content mt-4">
        <?= $content->content; ?>
    </div>

    <?php if($content->comments == 1) :?>
    <div id="komentar" class="mt-4 border-t-4">
        <h2 class="text-3xl mt-2">Komentar</h2>
        
        <form action="<?= base_url('comment/add'); ?>" method="post">
        <input type="hidden" name="id_article" value="<?= $content->id_article; ?>">
        <input type="hidden" name="username" value="<?= $user['username']; ?>">
        <input type="hidden" name="avatar" value="<?= $user['avatar']; ?>">
            <div class="flex gap-4 items-end my-3">
                <div class="basis-5/6">
                    <label for="comment" class="text-xl font-semibold block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tambah Komentar</label>
                   <textarea id="comment" name="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Komentar Anda....."></textarea>
                </div>
                <div class="basis-1/6">
                   <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</button>
                </div>
            </div>
        </form>

        <div class="border-t-2 py-3">
            <h3 class="text-xl font-semibold mb-3">Komentar(<?= $countComment; ?>)</h3>
            <?php foreach ($comment as $com) : ?>
            <?php if($com['id_article'] == $content->id_article) : ?>
            <input type="hidden" name="id_article" value="<?= $content->id_article; ?>">
            <div class="flex flex-col">
                <div class="flex flex-row items-start">
                    <img class="h-10 w-10 rounded-full mr-3" src="<?= base_url('assets/img/profile/') . $com['avatar']; ?>" alt="">
                    <h4 id="user" class="text-xl "><?= $com['username']; ?></h4>
            </div>
                <div class="mb-3">
                  
                    <p class="text-md ml-14 -mt-3"><?= $com['comment']; ?></p>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
    <?php endif; ?>
</div>