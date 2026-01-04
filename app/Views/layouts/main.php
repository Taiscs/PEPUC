<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>ONG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="header">
    <div class="container header-content">

        <!-- LOGO -->
        <div class="logo">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo da ONG">
        </div>

        <!-- MENU -->
        <nav class="menu">
            <ul>
                <li><a href="<?= base_url('/') ?>">Início</a></li>
                <li><a href="#">Nossa História</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Comunidade</a></li>
             
            </ul>
        </nav>

    </div>
</header>


<main>
    <?= $this->renderSection('content') ?>
</main>

<footer class="footer">
    <p>© <?= date('Y') ?> • ONG • Todos os direitos reservados</p>
</footer>

</body>
</html>
