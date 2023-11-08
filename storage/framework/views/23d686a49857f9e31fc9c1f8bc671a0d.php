<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create a Book
            </div>
    
            <div class="panel-body">
                <form action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
    
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
                    </div>
    
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" value="<?php echo e(old('price')); ?>">
                    </div>
    
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <textarea name="description" id="description" cols="30" rows="6" class="form-control"><?php echo e(old('description')); ?></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit" style="width: 100%;">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookstoreweb\resources\views/products/create.blade.php ENDPATH**/ ?>