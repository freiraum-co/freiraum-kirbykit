
    <?= js(['']) ?>
    <?php if(!$page->env('DEV')): ?>
      <?php snippet('cookie-modal', ['assets' => true,'showOnFirst' => true,'features' => []]); ?>
    <?php endif; ?>
  </body>
</html>