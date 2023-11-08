<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="<?php echo e(asset($product->image)); ?>" alt="book" width="300px" height="400px" class="rounded mx-auto d-block">
                        </div>

                        <div class="card-body">
                            <a href="<?php echo e(route('product.single', ['id' => $product->id])); ?>" style="text-decoration:none;">
                                <h5 class="card-title h3 text-center" >
                                    <?php echo e($product->name); ?>

                                </h5>
                            </a>
                            <div class="card-text h3 text-center text-muted">Rs. <?php echo e($product->price); ?></div>
                        </div>

                        <a href="<?php echo e(route('cart.rapid.add', ['id' => $product->id])); ?>" class="btn btn-primary btn-md">
                            <span class="text">Add to Cart</span>
                        </a>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <div class="col-lg-12"><?php echo e($products->links()); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookstore-website\resources\views/index.blade.php ENDPATH**/ ?>