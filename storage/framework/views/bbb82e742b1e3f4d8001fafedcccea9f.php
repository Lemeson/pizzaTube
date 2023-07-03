

<form method="POST" action="<?php echo e(route('insere-pizza')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" required>
    <div>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" required>
    </div>
    <div>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" required>
    </div>
        <button type="submit">Create User</button>
    </div>
</form>
<?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/testeForm.blade.php ENDPATH**/ ?>