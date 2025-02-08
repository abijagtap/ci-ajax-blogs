<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blog List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <h1 class="my-4">Blogs</h1>
        <!-- <a href="<?= base_url('admin/create') ?>" class="btn btn-primary mb-3">Create New Blog</a> -->
        <a href="#" id="createNewBlogBtn" class="btn btn-primary mb-3" style="float: right">Create New Blog</a>
        <a href="<?= base_url(); ?>" class="back-to-grid mb-3">Back to Home</a>

        <table class="table table-bordered table-hover table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="5%">ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th width="15%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($blogs)) {
                foreach ($blogs as $blog): ?>
                    <tr>
                        <td><?= $blog['id'] ?></td>
                        <td><?= $blog['title'] ?></td>
                        <td><?= $blog['author'] ?></td>
                        <td><?= $blog['short_content'] ?></td>
                        <td>
                            <a href="<?= base_url('admin/edit/' . $blog['id']) ?>" class="btn btn-sm btn-info editBlogBtn">Edit</a>
                            <a href="<?= base_url('admin/delete/' . $blog['id']) ?>" class="btn btn-sm btn-danger deleteBlogBtn">Delete</a>

                        </td>
                    </tr>
                <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="5" class="text-center">No records found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
    $(document).ready(function() {
    $(document).on('click', '#createNewBlogBtn', function(e) {
        e.preventDefault(); 

        $.ajax({
            type: 'GET',
            url: '<?= base_url("admin/create") ?>', 
            success: function(response) {
                $('.container').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on('click', '.editBlogBtn', function(e) {
        e.preventDefault(); 
        var editUrl = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: editUrl, 
            success: function(response) {
                $('.container').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on('click', '.deleteBlogBtn', function(e) {
        e.preventDefault();
        var deleteUrl = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: deleteUrl,
            success: function(response) {
                $('.container').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

    </script>

</body>

</html>