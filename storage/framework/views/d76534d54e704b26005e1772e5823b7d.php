<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="panel panel-default">
                <div class="panel-heading">
                    All Books
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($products->count()>0): ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>        
                                        <td>
                                            <?php echo e($product->name); ?> 
                                        </td>
                    
                                        <td>
                                            <img src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->name); ?>" width="40px" height="40px">
                                        </td>
                                        
                                        <td>
                                            <label for="price"><?php echo e($product->price); ?></label>
                                        </td>
                                        <td>
                                            <a 
                                                href="<?php echo e(route('product.edit',['id' => $product->id])); ?>" 
                                                class="glyphicon glyphicon-pencil btn btn-outline-info"></a>
                                        </td>
                    
                                        <td>
                                            <a 
                                                href="<?php echo e(route('product.delete',['id' => $product->id])); ?>" 
                                                class="glyphicon glyphicon-trash btn btn-outline-danger"></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <th colspan="4" class="text-center">No product published</th>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>   
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookstoreweb\resources\views/products/index.blade.php ENDPATH**/ ?>