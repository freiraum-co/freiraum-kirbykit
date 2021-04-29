
    <?= js(['']) ?>
    <?php if($page->env('KIRBY_DEV')): ?>
      <?php snippet('cookie-modal', ['assets' => true,'showOnFirst' => true,'features' => []]); ?>
    <?php endif; ?>
  </body>
</html>