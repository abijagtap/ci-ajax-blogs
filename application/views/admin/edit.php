<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - <?= isset($blog) ? 'Edit' : 'Create' ?> Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <a href="#" id="backBtn" class="mb-3">Back to list</a>
        <h1 class="mt-3"><?= isset($blog) ? 'Edit' : 'Create' ?> Blog</h1>
        <div class="blog-form">
            <form id="blogForm" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div id="successMessage" class="alert alert-success" style="display: none;"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="<?= isset($blog) ? $blog['title'] : '' ?>" required>
                            <?= form_error('title', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="short_content">Short Content</label>
                            <textarea class="form-control" placeholder="Short Content" id="short_content" name="short_content" required><?= isset($blog) ? $blog['short_content'] : '' ?></textarea>
                            <?= form_error('short_content', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" placeholder="Full Content" id="content" name="content" required><?= isset($blog) ? $blog['content'] : '' ?></textarea>
                            <?= form_error('content', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" placeholder="Author" id="author" name="author" value="<?= isset($blog) ? $blog['author'] : '' ?>" required>
                            <?= form_error('author', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">Select</option>
                                <option value="News" <?= isset($blog) && $blog['category'] == 'News' ? 'selected' : '' ?>>News</option>
                                <option value="Sports" <?= isset($blog) && $blog['category'] == 'Sports' ? 'selected' : '' ?>>Sports</option>
                                <option value="Entertainment" <?= isset($blog) && $blog['category'] == 'Entertainment' ? 'selected' : '' ?>
                                    >Entertainment</option>
                                <option value="Finance" <?= isset($blog) && $blog['category'] == 'Finance' ? 'selected' : '' ?>>Finance
                                </option>
                            </select>
                            <?= form_error('category', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file form-control" id="image" name="image">
                            <?php if(isset($blog)) { ?>
                                <img src="<?= base_url('uploads/' . $blog['image']) ?>" alt="<?= $blog['title'] ?>" class="mt-3" width="100px">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control" placeholder="Meta Title" id="meta_title" name="meta_title" value="<?= isset($blog) ? $blog['meta_title'] : '' ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" class="form-control" placeholder="Meta Keywords" id="meta_keywords" name="meta_keywords" value="<?= isset($blog) ? $blog['meta_keywords'] : '' ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" placeholder="Meta Description" id="meta_description" name="meta_description"><?= isset($blog) ? $blog['meta_description'] : '' ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" id="submitButton" class="btn btn-success"><?= isset($blog) ? 'Update' : 'Create' ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        function submitForm(formData) {
            var url = '<?= isset($blog) ? base_url('admin/edit/' . $blog['id']) : base_url('admin/create') ?>';
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#submitButton').prop('disabled', true);
                },
                success: function (response) {
                    var listHtml = $(response).filter('.container').html();
                    if (listHtml) {
                        $('.container').html(listHtml);
                    } else {
                        var listUrl = '<?= base_url("admin") ?>';
                        history.pushState(null, null, listUrl);
                        $('.container').load(listUrl); 
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                    alert('Form submission failed! Please try again.');
                    $('#submitButton').prop('disabled', false);
                }
            });
        }

        $('#blogForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            submitForm(formData);
        });

        $('#backBtn').click(function (e) {
            e.preventDefault();
            var listUrl = '<?= base_url("admin") ?>';
            history.pushState(null, null, listUrl);
            $('.container').load(listUrl); 
        });
    });
</script>

</body>

</html>