<?php if (isset($errors)) : ?>
  <?php foreach ($errors as $error) : ?>
    <div class="message bg-red-100 my-3"><?= $error ?></div>
  <?php endforeach; ?>
<?php endif; ?>