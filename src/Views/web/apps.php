<?php $this->layout('components/theme', [$appLink]) ?>

<div style="min-height: 100vh;" class="container mt-5 pt-5">
    <div class="text-center mb-5">
        <h2>Veja todos os APPS</h2>
        <small class="small">Todos os apps já desenvolvidos por mim ao longo do tempo</small>
        <div style="min-height: 1rem;border-bottom: 1px solid #fff; width: 25rem; margin:0 auto;"></div>
    </div>
    <div class="row gap-3 justify-content-center">
        <?php foreach($apps as $app): ?>
            <div class="col-10 col-md-3 mb-3 p-1 text-center">
                <h4><?= $app->title ?></h4>
                <small><?= $app->description ?></small>
                <img src="<?= asset("$app->path") ?>" class="w-100 mt-2">
                <a href="<?= $app->link ?>" target="_blank" class="btn btn-light mt-3">Acessar <?= $app->title ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>