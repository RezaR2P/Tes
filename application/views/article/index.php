
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-video" data-flashdata="<?= $this->session->flashdata('videoSuccess'); ?>"></div>
<div class="flash-foto" data-flashdata="<?= $this->session->flashdata('photoSuccess'); ?>"></div>
<div class="flash-tautan" data-flashdata="<?= $this->session->flashdata('tautanSuccess'); ?>"></div>


<div class="basis-8/12 -ml-8" id="content">
    <?php if(!empty($db_article)) : ?>
        <h5 class="text-lg"><?= $total_rows; ?> Hasil Ditemukan</h5>
    <?php endif; ?>
    <?php if(empty($db_article)) : ?>
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Data Tidak Ditemukan!</span>
        </div>
    <?php endif; ?>
    <?php foreach ($db_article as $article) : ?>
        <div class="flex gap-6 border-b-2 py-4">
       
            <div class="basis-2/6">
                <a href="<?= base_url("article/maincontent/") . $article['id_article']; ?>">
                <?php $type = explode(".", $article['coverImage']); ?>
                    <?php if($type[1] == 'pdf') : ?>
                    <img class="border-4 border-slate-700 shadow-lg rounded-lg mx-auto w-auto max-h-72" src="<?= base_url('assets/img/content/no-preview.png') ?>" alt="<?= $article['title']; ?>"></a>
                    <?php else : ?>
                        <img class="border-4 border-slate-700 shadow-lg rounded-lg mx-auto w-auto max-h-72" src="<?= base_url('assets/img/content/') . $article['coverImage']; ?>" alt="<?= $article['title']; ?>"></a>
                    <?php endif; ?>
            </div>
            <div class="basis-4/6">
                <h5 class="text-xl"><?= $article['title']; ?></h5>
                
                <p class="text-sm mb-2"><?= $article['username']; ?> | <?= date('d F Y', $article['date']); ?>
                </p>
                <div class="mb-4"><?= (str_word_count($article['content']) > 60 ? substr($article['content'], 0, 200) . " ........." : '<div>' . $article['content'] . '</div>') ?>
                </div>

                <a href="<?= base_url('article/maincontent') . $article['id_article'] ?>" class="text[#150544] bg-gray-100 hover:bg-[#150544] hover:text-white px-4 py-2 rounded-full text-sm font-semibold">Baca Lebih</a>
            </div>

        </div>
    <?php endforeach; ?>

    <div class="flex justify-center mt-4">
    <?= $this->pagination->create_links(); ?>
    </div>
</div>