<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>INVENTARIS</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <style>
        body{
            background-image: url('images/splashscreen.png');
            background-size: 100%;
            opacity: 0.9;
        }
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand">
                    inventaris
                </a>
                      <a class="navbar-brand" href="<?php echo e(url('/jenis')); ?>">
                        Jenis
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/ruangs')); ?>">
                        Ruang
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/pegawais')); ?>">
                        Pegawai
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/detailpinjams')); ?>">
                        Detail Pinjam
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/peminjamans')); ?>">
                        Peminjaman
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/pegawais')); ?>">
                        Pegawai
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/inventaris')); ?>">
                        Inventaris
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/layout/navbar.blade.php ENDPATH**/ ?>