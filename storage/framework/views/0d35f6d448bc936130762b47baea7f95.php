<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col">
            <img src="<?php echo e(asset($product->image)); ?>" alt="" height="400px" width="300px">
       </div>
       <div class="col-8">
            <div class="row py-3 px-lg-5">
                <h1 class="h1"><?php echo e($product->name); ?></h1>
            </div>
            <div class="row py-3 px-lg-5">
                <p class="product-details-info-text"><?php echo e($product->description); ?></p>
            </div>
            <div class="row py-3 px-lg-5">
                <div class="h3 text-muted">Rs. <?php echo e($product->price); ?></div>
            </div>
            <div class="row py-3 px-lg-5">
                <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                 
                        <div class="row">
                            <div class="col">
                                <input type="number" value="1" name="qty" min='1' max="99" class="form-control">
                            </div>

                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">

                            <div class="col">
                                <button type="submit" class="btn btn-info btn-md">
                                        <span class="glyphicon glyphicon-shopping-cart"></span>  Add to Cart
                                </button>
                            </div>               
                        </div>
                </form>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookstoreweb\resources\views/single.blade.php ENDPATH**/ ?>