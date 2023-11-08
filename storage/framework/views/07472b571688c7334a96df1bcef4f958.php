<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
                In Your Shopping Cart: <span> <?php echo e(Cart::content()->count()); ?> items</span>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Image</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col" class="text-center">Delete</th>
                        <th scope="col" class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>        
                            <td class="text-center">
                                <label for="name"><?php echo e($pdt->name); ?></label>
                            </td>
        
                            <td class="text-center">
                                <img src="<?php echo e(asset($pdt->model->image)); ?>" alt="" width="40px" height="40px">
                            </td>
                            
                            <td class="text-center">
                                <label for="price">Rs. <?php echo e($pdt->price); ?></label>
                            </td>
            
                            <td class="text-center">
                                <a href="<?php echo e(route('cart.decr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ])); ?>" class="btn btn-outline-primary">-</a>
                                <input title="Qty" type="number" value="<?php echo e($pdt->qty); ?>" max='99' min= '1' readonly>
                                <a href="<?php echo e(route('cart.incr', ['id' => $pdt->rowId, 'qty' => $pdt->qty])); ?>" class="btn btn-outline-primary">+</a>
                            </td>

                            <td class="text-center">
                                <a 
                                    href="<?php echo e(route('cart.delete', ['id' => $pdt->rowId ])); ?>" 
                                    class="glyphicon glyphicon-trash btn btn-outline-danger"></a>
                            </td class="text-center">

                            <td class="text-center">Rs. <?php echo e($pdt->total()); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(Cart::content()->count() == 0): ?>
                        <tr>
                            <th colspan="6" class="text-center">No product in cart</th>
                        </tr>
                    <?php else: ?>
                        <tr>
                            <th colspan="4" class="text-center"></th>
                            <th class="text-center">Total Price:</th>
                            <td class="text-center">Rs. <?php echo e(Cart::total()); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php if(!Cart::content()->count() == 0): ?>
        <div class="text-center gap">
            <a href="<?php echo e(route('cart.pay')); ?>" class=" btn btn-success btn-lg">Pay for Products
            </a>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookstore-website\resources\views/cart.blade.php ENDPATH**/ ?>