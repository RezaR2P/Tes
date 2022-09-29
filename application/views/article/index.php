

<div class="basis-8/12 " id="content">
    <?php foreach ($db_article as $article) : ?>
        <div class="flex gap-6 border-b-2 py-4">
            <div class="basis-2/6">
            <a href="<?= base_url("article/maincontent/") . $article->id_article; ?>">
            <img class="border-4 border-slate-700 shadow-lg rounded-lg max-w-full h-fit" src="<?= base_url('assets/img/content/') . $article->coverImage; ?>" alt="<?= $article->title; ?>"></a>
            </div>  
            <div class="basis-4/6">
            <h5 class="text-xl"><?= $article->title; ?></h5>
                    <p class="text-sm mb-2"><?= $article->username; ?> | <?= date('d F Y', $article->date); ?> (41 Dibaca - 0 Komentar) </p>
                    <div class="mb-3"><?= (str_word_count($article->content) > 60 ? substr($article->content, 0, 200) . " ........." : '<div>' .$article->content . '</div>') ?>
                    </div>
            
                    <a class="text-cyan-500 hover:text-cyan-700" href="<?= base_url("article/maincontent/") . $article->id_article; ?>">Selengkapnya</a>
            </div>  
            
        </div>
    <?php endforeach; ?>

</div>