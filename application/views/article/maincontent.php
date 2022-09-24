<div class="col-md-8 mt-3" id="content">
    <h2 class=""><?= $content->title; ?></h2>
    <p><?= $content->username; ?> - <?= date('d F Y', $content->date); ?></p>
    <img src="<?= base_url('assets/img/content/komputer.jpg'); ?>" class="img-fluid" alt="Responsive image">
    <div class="content">
        <?= $content->content; ?>
    </div>
</div>