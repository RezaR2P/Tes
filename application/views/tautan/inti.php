<div class="basis-8/12" id="inti">
    <?php if(!empty($tautan)) : ?>
        <h5 class="text-lg"><?= $total_rows; ?> Hasil Ditemukan</h5>
    <?php endif; ?>
    <?php if(empty($tautan)) : ?>
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Data Tidak Ditemukan!</span>
        </div>
    <?php endif; ?>
    <?php foreach ($tautan as $t) : ?>
        <div class="flex gap-6 border-b-4 py-3 items-center">
            <h4 class="text-xl basis-5/6"><?= $t['title']; ?></h4>
            <div class="basis-1/6">
                <a href="<?= $t['tautan']; ?>"><i class="fa-solid fa-arrow-up-right-from-square text-4xl text-cyan-500"></i></a>
            </div>

        </div>

    <?php endforeach; ?>

    <div class="flex justify-end mt-4">
    <?= $this->pagination->create_links(); ?>
    </div>
</div>