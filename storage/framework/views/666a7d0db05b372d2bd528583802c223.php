<h1>Personagens da SWAPI</h1>

<ul>
    <?php $__currentLoopData = $data['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($character['name']); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/swapi.blade.php ENDPATH**/ ?>