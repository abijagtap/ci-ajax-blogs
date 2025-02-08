<div id="blog-content">
    <!-- Back button/link -->
    <a href="<?= base_url('blog') ?>" class="back-to-grid ">Back to list</a>
    <div class="container">
        <div class="blog-detail mb-5">
            <?php if ($blog['image']) { ?>
                <img src="<?= base_url('uploads/' . $blog['image']) ?>" alt="<?= $blog['title'] ?>" width="100%">
            <?php } else { ?>
                <img src="<?= base_url('uploads/no-image-found.png') ?>" alt="<?= $blog['title'] ?>" width="100%">
            <?php } ?>
            <h1 class="mt-3"><?= $blog['title'] ?></h1>
            <p class="mt-2"><span class="fa fa-user"></span> by <?= $blog['author'] ?> &nbsp; <span class="fa fa-tag"></span> <?= $blog['category'] ?> &nbsp; <span class="fa fa-calendar"></span> <?= date("Y-m-d", strtotime($blog['created_at'])); ?></p>
            <p class="mt-3"><?= $blog['short_content'] ?></p>
            <p class="mt-3"><?= $blog['content'] ?></p>
        </div>
        <div class="sidebar">
            <h3>Other Blogs</h3>
            <ul>
                <?php foreach ($other_blogs as $other_blog): ?>
                    <li><a href="<?= base_url('blog/view/' . $other_blog['id']) ?>" class="read-more"><?= $other_blog['title'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>