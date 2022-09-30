<div class="basis-8/12 mt-4" id="maincontent">
    <h2 class="text-4xl"><?= $content->title; ?></h2>
    <p class="text-sm mb-2"><?= $content->username; ?> - <?= date('d F Y', $content->date); ?></p>
    <img src="<?= base_url('assets/img/content/') . $content->coverImage; ?>" class="mx-auto w-auto max-h-[28rem] rounded-lg shadow-xl dark:shadow-gray-800" alt="Responsive image">
    <div class="content mt-4">
        <?= $content->content; ?>
    </div>
</div>