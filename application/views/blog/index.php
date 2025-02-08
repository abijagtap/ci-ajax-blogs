<div class="container">
    <div class="grid">
        <?php foreach ($blogs as $blog): ?>
            <div class="grid-item">
                <?php if($blog['image']) { ?>
                    <img src="<?= base_url('uploads/' . $blog['image']) ?>" alt="<?= $blog['title'] ?>">
                <?php } else { ?>
                    <img src="<?= base_url('uploads/no-image-found.png') ?>" alt="<?= $blog['title'] ?>">
                <?php } ?>
                <h3 class="mt-2"><?= $blog['title'] ?></h3>
                <p><?= $blog['short_content'] ?></p>
                <p><span class="fa fa-user"></span> <em>by <?= $blog['author'] ?></em></p>
                <a href="<?= base_url('blog/view/'.$blog['id']) ?>" class="read-more btn btn-success btn-sm mt-2">Read More</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
