<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'head.php') ?>
<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'navbar.php') ?>

<div class="container">
    <h1 class>All questions. Page <?= $page ?></h1>

    <div class="questions">
        <?php foreach ($questions as $q) : ?>
            <a href="/questions/<?= htmlspecialchars($q->id) ?>" class="question border-bottom border-secondary border-2">
                <div class="question__title"><?= htmlspecialchars(substr($q->title, 0, 50)) ?></div>
                <?php if ($q->description !== null) : ?>
                    <div class="question__descr"> <?= htmlspecialchars(substr($q->description, 0, 250)) ?> </div>
                <?php endif; ?>
                <div class="question__additional">
                    <div class="question__name text-secondary"><?= htmlspecialchars($q->first_name . ' ' . $q->last_name) ?></div>
                    <div class="question__date text-secondary"><?= htmlspecialchars(date("d.m.Y", strtotime($q->created_at))); ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?= $links; ?>
    </div>
</div>

<?php include_once(APPPATH . 'views' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'footer.php') ?>