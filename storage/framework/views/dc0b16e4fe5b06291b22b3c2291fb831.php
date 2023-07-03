<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

</br></br></br></br></br></br></br></br>

<!--Table-->
<div class="container">
<div class="row">
    <div class="col">
        <h2>Pizzas</h2>
        <table class="table table-striped w-auto">

        <!--Table head-->
        <thead>
            <tr scope="table-info">
            <th>Name</th>
            <th>Valor</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="table-info">
                <input type="hidden" class="item-id" value="<?php echo e($pizza->id); ?>">
                <td><?php echo e($pizza->nomePizza); ?></td>
                <td><?php echo e($pizza->valorPizza); ?></td>
                <td>
                    <?php if(Auth::check() && Auth::user()->role == 1): ?>
                    <form method="POST" action="<?php echo e(route('deletar-item')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="tipo" value="pizza">
                        <input type="hidden" name="id" value="<?php echo e($pizza->id); ?>">
                        <button type="submit" class="btn-excluir btn blue-gradient">Excluir</button>
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <!--Table body-->


        </table>
<!--Table-->
    </div>
    <div class="col">
        <h2>Bebidas</h2> 
        <table class="table table-striped w-auto">

        <!--Table head-->
        <thead>
            <tr scope="table-info">
            <th>Name</th>
            <th>Valor</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <?php $__currentLoopData = $bebidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bebida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="table-info">
                <input type="hidden" class="item-id" value="<?php echo e($bebida->id); ?>">
                <td><?php echo e($bebida->nomeBebida); ?></td>
                <td><?php echo e($bebida->valorBebida); ?></td>
                <td>
                    <?php if(Auth::check() && Auth::user()->role == 1): ?>
                    <form method="POST" action="<?php echo e(route('deletar-item')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="tipo" value="bebida">
                        <input type="hidden" name="id" value="<?php echo e($bebida->id); ?>">
                        <button type="submit" class="btn-excluir btn blue-gradient">Excluir</button>
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <!--Table body-->


        </table>
        <!--Table-->
    </div>
    <div class="col">
        <h2>Esfihas</h2>
        <table class="table table-striped w-auto">

        <!--Table head-->
        <thead>
            <tr scope="table-info">
            <th>Name</th>
            <th>Valor</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <?php $__currentLoopData = $esfihas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esfiha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="table-info">
                <input type="hidden" class="item-id" value="<?php echo e($esfiha->id); ?>">
                <td><?php echo e($esfiha->nomeEsfiha); ?></td>
                <td><?php echo e($esfiha->valorEsfiha); ?></td>
                <td>
                    <?php if(Auth::check() && Auth::user()->role == 1): ?>
                    <form method="POST" action="<?php echo e(route('deletar-item')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="tipo" value="esfiha">
                        <input type="hidden" name="id" value="<?php echo e($esfiha->id); ?>">
                        <button type="submit" class="btn-excluir btn blue-gradient">Excluir</button>
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <!--Table body-->

    </table>
        <!--Table-->
    </div>

</div>

</div>

</br></br></br></br></br></br></br></br>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/public/cardapio2.blade.php ENDPATH**/ ?>