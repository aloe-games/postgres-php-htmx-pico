<section>
    <header><?php echo $name; ?></header>
</section>

<?php if (isset($errors) && count($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <section>
            <mark><?php echo $error; ?></mark>
        </section>
    <?php endforeach; ?>
<?php endif; ?>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'empty.php'; ?>
