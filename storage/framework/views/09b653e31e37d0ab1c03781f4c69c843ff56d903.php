<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First CRUD</title>
    <link rel="stylesheet" href="<?php echo e(asset('style/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/style.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My First Laravel CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Buat Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products">Lihat Produk</a>
            </li>
          </ul>
        </div>
      </nav>
      
    <div class="container mt-5" style="width: 33%;">
        <form class="mb-4" action="/update/<?php echo e($products->id); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PATCH'); ?>
            <h1 class="text-center mb-4">Edit Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input value="<?php echo e($products->nama_barang); ?>" type="text" class="form-control" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input value="<?php echo e($products->harga); ?>" type="number" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input value="<?php echo e($products->stok); ?>" type="number" class="form-control" name="stok">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
<script src="<?php echo e(asset('scripts/jquery-3.5.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('scripts/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laragon\www\first-laravel-crud\resources\views/edit.blade.php ENDPATH**/ ?>