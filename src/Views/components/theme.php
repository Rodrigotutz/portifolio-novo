<!doctype html>
<html lang="pt-br">
    <head>
        <title><?= $title ?></title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="shortcut icon" href="<?= asset('img/icon.png') ?>" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="<?=asset('css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?=asset('css/theme.css') ?>">
        <link rel="stylesheet" href="<?=asset('css/home.css') ?>">

    </head>

    <body class="bg-dark text-white">
        <header>
            <?= $this->insert('components/sidebar') ?>
        </header>

        <main>
            <?= $this->section('content')?>
        </main>

        <div class="d-flex flex-column gap-2 mt-3 social d-none d-md-flex">
            <a href="https://wa.me/5517981337392?text=Ol%C3%A1+Rodrigo+Tutz" target="_blank" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
            <a href="https://br.linkedin.com/in/rodrigotutz" target="_blank" class="text-white"><i class="bi bi-linkedin fs-5"></i></a>
        </div>


        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
