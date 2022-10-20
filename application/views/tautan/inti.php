<div class="basis-8/12" id="inti">
    <?php foreach ($tautan as $t) : ?>
        <div class="flex gap-6 border-b-4 py-3 items-center">
            <h4 class="text-xl basis-5/6"><?= $t->title; ?></h4>
            <div class="basis-1/6">
                <a href="<?= $t->tautan; ?>"><i class="fa-solid fa-arrow-up-right-from-square text-4xl text-cyan-500"></i></a>
            </div>

        </div>

    <?php endforeach; ?>

</div>