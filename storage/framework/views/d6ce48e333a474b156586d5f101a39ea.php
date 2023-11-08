<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron text-center">
        <h1>Welcome to the Bookstore</h1>
        <p>Discover a world of books, authors, and more.</p>
        <a href="<?php echo e(route('books')); ?>" class="btn btn-primary">Explore Books</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookstore-website\resources\views/welcome.blade.php ENDPATH**/ ?>