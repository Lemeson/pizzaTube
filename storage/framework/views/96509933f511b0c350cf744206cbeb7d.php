<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<br>
<br>
<!-- Exemplo de exibição dos dados do pedido -->
<h1>Dados do Pedido</h1>

<br>
<div class="container-sm" style="width: 80%">

<?php if(!empty($dadosPedido)): ?>
    <p class="bq-title">ID: <?php echo e($dadosPedido[0]->id); ?></p>
    <p class="bq-title">Pizza: <?php echo e($dadosPedido[0]->nomePizza); ?></p>
    <p class="bq-title">Esfiha: <?php echo e($dadosPedido[0]->nomeEsfiha); ?></p>
    <p class="bq-title">Bebida: <?php echo e($dadosPedido[0]->nomeBebida); ?></p>

<?php else: ?>
    <p>Nenhum pedido encontrado</p>
<?php endif; ?>
</div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/dados-pedido.blade.php ENDPATH**/ ?>