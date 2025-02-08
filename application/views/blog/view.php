<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1><?= $blog['title'] ?></h1>
            <img src="<?= base_url('uploads/' . $blog['image']) ?>" alt="<?= $blog['title'] ?>">
            <p><?= $blog['content'] ?></p>
            <p>By <?= $blog['author'] ?></p>
            <p>Created at: <?= $blog['created_at'] ?></p>
        </div>
        <div class="col-md-4">
            <h3>Other Blogs</h3>
            <ul>
                <?php foreach ($other_blogs as $other_blog): ?>
                    <li><a href="<?= site_url('blog/view/' . $other_blog['id']) ?>" class="other-blog-link"><?= $other_blog['title'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
