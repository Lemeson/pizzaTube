<?php $__env->startComponent('components.panel-de-entrada', ['image' => 'pizza_capa.jpg', 'texto' => 'Cardapio', 'linkTexto' => 'cardapio']); ?><?php echo $__env->renderComponent(); ?>
  
<?php $__env->startComponent('components.best-seller'); ?><?php echo $__env->renderComponent(); ?>
    
<?php $__env->startComponent('components.streak-section'); ?><?php echo $__env->renderComponent(); ?>  

<?php $__env->startComponent('components.localizacao-com-logo-atras'); ?><?php echo $__env->renderComponent(); ?>



<?php echo $__env->make('common.basic-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/home.blade.php ENDPATH**/ ?>