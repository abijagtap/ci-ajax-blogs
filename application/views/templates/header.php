<!DOCTYPE html>
<html>

<head>
    <title>Blogs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>

<nav class="navbar navbar-expand-lg navbar-light border">
  <a class="navbar-brand back-to-grid" href="<?= base_url(); ?>">Blogs</a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a href="javascript:void(0)" class="nav-link">Home</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link">Left Link 2</a>
    </li> -->
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="<?= base_url('admin'); ?>" class="nav-link">Blogs</a>
    </li>
  </ul>
</nav>

<body>