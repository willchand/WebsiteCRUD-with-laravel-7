<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products</title>
    <link rel="stylesheet" href="<?php echo e(asset('style/bootstrap.min.css')); ?>">
    <!-- <link rel="stylesheet" href="<?php echo e(asset('style/style.css')); ?>"> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My First Laravel CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Buat Produk</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/products">Lihat Produk</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($products->nama_barang); ?></td>
                  <td><?php echo e($products->harga); ?></td>
                  <td><?php echo e($products->stok); ?></td>
                  <td>
                    <a href="/edit/<?php echo e($products->id); ?>" class="btn btn-success">Edit</a>
                    <hr>
                    <form action="/delete/<?php echo e($products->id); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
              </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>  
</body>
</html><?php /**PATH C:\laragon\www\first-laravel-crud\resources\views/products.blade.php ENDPATH**/ ?>