<hr>


<div class="col-md-8 " id="content">
    <?php foreach ($db_article as $article) : ?>
        <div class="row border-bottom py-3">
            <div class="col-12 d-flex">
                <div class="col-4 img">
                    <a href="<?= base_url("article/maincontent/") . $article->id_article; ?>"><img src="<?= base_url('assets/img/content/') . $article->coverImage; ?>" alt="..." class="img-thumbnail "></a>
                </div>
                <div class="col-8 content">
                    <h5><?= $article->title; ?></h5>
                    <p><?= $article->username; ?> | <?= date('d F Y', $article->date); ?> (41 Dibaca - 0 Komentar) </p>
                    <?= (str_word_count($article->content) > 60 ? substr($article->content, 0, 200) . " ........." : '<div>' .$article->content . '</div>') ?>
                  <br>
                    <a href="<?= base_url("article/maincontent/") . $article->id_article; ?>">Selengkapnya</a>
                </div>

            </div>
        </div>
    <?php endforeach; ?>

</div>