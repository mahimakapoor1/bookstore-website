<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Book Store</title>

    
    <script src="<?php echo e(asset('js/jQuery.min.js')); ?>"></script>

    
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.js')); ?>"></script>

    
    <script src="<?php echo e(asset('toastr/toastr.js')); ?>"></script>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>" type="text/css">

    
    <link rel="stylesheet" href="<?php echo e(asset('toastr/toastr.css')); ?>">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #9C27B0;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Book Store
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->admin): ?>
                            <ul class="navbar-nav navbar-left">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('products')); ?>" class="nav-link">Products</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('product.create')); ?>" class="nav-link">New Products</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    <?php endif; ?>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">

                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(count(session('cart', []))); ?> <span class="cart">Cart</span>
                            </a>

                            <div class="dropdown-item text-center">
    <div class="text-muted h5 text-center">
        Rs. 
        
        <?php
            $cart = session('cart', []);
        ?>

        
        <?php
            $total = 0;
        ?>

        
        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $total += $item['price'] * $item['qty'];
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo e($total); ?>

    </div>
    <a href="<?php echo e(route('cart')); ?>" class="btn btn-info btn-md-6">View Cart</a>
</div>

                        </li>

                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role...
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script>
        <?php if(session('success')): ?>
            toastr.success("<?php echo e(session('success')); ?>")
        <?php endif; ?>

        <?php if(session('info')): ?>
            toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>
    </script>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token 
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Book Store</title>

    
    <script src="<?php echo e(asset('js/jQuery.min.js')); ?>"></script>

    
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.js')); ?>"></script>

    
    <script src="<?php echo e(asset('toastr/toastr.js')); ?>"></script>

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>" type="text/css">

    
    <link rel="stylesheet" href="<?php echo e(asset('toastr/toastr.css')); ?>">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #9C27B0;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Book Store
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->admin): ?>
                            <ul class="navbar-nav navbar-left">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('products')); ?>" class="nav-link">Products</a>
                                </li>

                                <li class="nav-item">
                                <a href="<?php echo e(route('product.create')); ?>" class="nav-link">New Products</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    <?php endif; ?>
                    <ul class="navbar-nav navbar-right">

                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Cart::content()->count()); ?> <span class="cart">Cart</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="dropdown-item text-center">
                                    <div class="text-muted h5 text-center">
                                        Rs. <?php echo e(Cart::total()); ?>

                                    </div>
                                    <a href="<?php echo e(route('cart')); ?>" class="btn btn-info btn-md-6">View Cart</a>
                                </div>
                            </div>
                        </li>
    
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-center h5" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script>
        <?php if(Session::has('success')): ?>
            toastr.success("<?php echo e(Session::get('success')); ?>")
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
            toastr.info("<?php echo e(Session::get('info')); ?>");
        <?php endif; ?>
    </script>
</body>
</html> -->
<?php /**PATH D:\xampp\htdocs\bookstore-website\resources\views/layouts/app.blade.php ENDPATH**/ ?>