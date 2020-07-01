<?php

$color_scheme = !empty($color_scheme) ? ' ' . $color_scheme : 'navbar-dark bg-dark';

/*
Usage:

<?= self::components('navbar', ['color_scheme' => 'navbar-dark bg-dark']); ?>
*/

?>

<nav class="navbar navbar-expand-lg<?= $color_scheme; ?>">
    <div class="container">
        <a class="navbar-brand" href="<?= $url; ?>">
            <?= $site->title; ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavCollapse" aria-controls="mainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link<?= $site->is('home') ? ' active' : ''; ?>" href="<?= $url; ?>">
                        <?= i('Home'); ?>
                        <?php if ($site->is('home')): ?><span class="sr-only">(current)</span><?php endif; ?>
                    </a>
                </li>

                <?php foreach ($links as $link): ?>
                    <li class="nav-item">
                        <a class="nav-link<?= $link->active ? ' active' : ''; ?>" href="<?= $link->url; ?>">
                            <?= $link->title; ?>
                            <?php if ($link->active): ?><span class="sr-only">(current)</span><?php endif; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
