<br>
<div class="container-sm" style="width: 80%">
    <form class="text-center border border-light p-5" method="post" action="<?php echo e(route('esfiha-inserida')); ?>">
        <?php echo csrf_field(); ?>
        <p class="h4 mb-4">Insira nova esfiha</p>
        
        <input type="text" id="nomeEsfiha" name="esfiha[nomeEsfiha]" class="form-control mb-4" placeholder="Nome da esfiha">
        
        <input type="number" id="valorEsfiha" name="esfiha[valorEsfiha]" step="0.01" class="form-control mb-4" placeholder="Valor da esfiha">

        <input type="number" id="custoEsfiha" name="esfiha[custoEsfiha]" step="0.01" class="form-control mb-4" placeholder="Custo da esfiha">
        
        <button class="btn btn-info btn-block my-4" type="submit">Cadastrar nova esfiha</button>
    </form>
</div>
<?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/private/form-insere-esfiha.blade.php ENDPATH**/ ?>