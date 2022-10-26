<div class="basis-8/12 " id="content">
    <h5 class="text-lg"><?= $total_rows; ?> Hasil Ditemukan</h5>
     <?php if(($total_rows == 0)) : ?>
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Liputan Masih Kosong!</span>
        </div>
    <?php endif; ?>
    <?php foreach ($db_article as $article) : ?>
        <div class="flex gap-6 border-b-2 py-4">
            <div class="basis-2/6">
                <a href="<?= base_url("article/maincontent/") . $article['id_article']; ?>">
                    <img class="border-4 border-slate-700 shadow-lg rounded-lg mx-auto w-auto max-h-72" src="<?= base_url('assets/img/content/') . $article['coverImage']; ?>" alt="<?= $article['title']; ?>"></a>
            </div>
            <div class="basis-4/6">
                <h5 class="text-xl"><?= $article['title']; ?></h5>
                
                <p class="text-sm mb-2"><?= $article['username']; ?> | <?= date('d F Y', $article['date']); ?> (41 Dibaca)
                </p>
                <div class="mb-3"><?= (str_word_count($article['content']) > 60 ? substr($article['content'], 0, 200) . " ........." : '<div>' . $article['content'] . '</div>') ?>
                </div>

                <a class="text-cyan-500 hover:text-cyan-700" href="<?= base_url("article/maincontent/") . $article['id_article']; ?>">Selengkapnya</a>
            </div>

        </div>
    <?php endforeach; ?>

    <div class="flex justify-end mt-4">
    <?= $this->pagination->create_links(); ?>
    </div>
</div>