<?= snippet('head') ?>
<?= snippet('navbar') ?>
<h1><?= $page->title() ?></h1>
<p><?= $page->text()->kirbytext() ?></p>
<?= snippet('footer') ?>
<?= snippet('scripts') ?>