<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar red">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
       <img height="25" class="" src="<?php echo e(asset('/img/logo.png')); ?>" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(route('index')); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('cardapio')); ?>">Cardapio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('sobre-nos')); ?>">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <?php if(auth()->guard()->guest()): ?>
                <a class="nav-link" href="<?php echo e(route('login')); ?>">Faça login</a>
          </li>
          <li class="nav-item">
                <?php if(Route::has('register')): ?>
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Registre-se</a>
                <?php endif; ?>
          <li class="nav-item">
            <?php else: ?>
                <p class="nav-link">Bem-vindo, <?php echo e(auth()->user()->name); ?></p>
          </li>
          <li class="nav-item">
                <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="nav-link bg-transparent" style="border: none;">Logout</button>
                </form>
            <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if(auth()->guard()->guest()): ?>
          <?php if(Route::has('register')): ?>
          
          <?php endif; ?>
          <?php else: ?>
          <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
          <?php endif; ?>
</li>
        </ul>
        
      </div>
    </div>
  </nav>
<?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/components/nav-bar.blade.php ENDPATH**/ ?>