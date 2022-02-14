<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel CRUD</title>
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
        <form class="mb-4" action="/store" method="POST"> 
          <?php echo csrf_field(); ?>
            <h1 class="text-center mb-4">Buat Produk</h1>
            <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="number" class="form-control" name="stok">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Kirim</button>
        </form>
    </div>
<script src="<?php echo e(asset('scripts/jquery-3.5.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('scripts/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laragon\www\first-laravel-crud\resources\views/create.blade.php ENDPATH**/ ?>