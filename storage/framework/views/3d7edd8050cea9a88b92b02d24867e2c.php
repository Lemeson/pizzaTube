<?php $__env->startComponent('components.panel-de-entrada', ['image' => 'logo.png', 'texto' => 'Home', 'linkTexto' => 'index']); ?><?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('components.cardapio-geral'); ?><?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('components.local'); ?><?php echo $__env->renderComponent(); ?>
<?php echo $__env->make('common.basic-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/public/cardapio.blade.php ENDPATH**/ ?>