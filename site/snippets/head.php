<!doctype html>
<html lang="de">
  <head>
    <?php if (isFeatureAllowed('analytics')): ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-XXXXXXXX-X');
      </script>
    <?php endif ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?php snippet('meta_information'); ?>
    <?php snippet('robots'); ?>

    <?= css(['']) ?>
  </head>
  <body>