<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/Style.css', 'resources/js/Script.js', 'resources/js/server.js']); ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Registrar-se — Eletro Descartes</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/fontawesome/css/all.min.css')); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/bootstrap-social/bootstrap-social.css')); ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/components.css')); ?>">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">

            <div class="login-brand">
              <img src="<?php echo e(asset('backend/assets/img/LOGO.png')); ?>" alt="logo" width="100" style="width: 80%; height:auto; box-shadow:none;">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registrar-se</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo e(route('register')); ?>" class="needs-validation" novalidate="">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Nome</label>
                      <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="lastname">Sobrenome</label>
                      <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password">Senha</label>
                      <input id="password" type="password" class="form-control" name="password" required>
                      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="password_confirmation">Confirmar senha</label>
                      <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="terms" required>
                      <label class="custom-control-label" for="terms">Concordo com os termos e condições</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Criar conta
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <div class="mt-5 text-muted text-center">
              Já tem uma conta? <a href="<?php echo e(route('login')); ?>">Fazer login</a>
            </div>
            <div class="simple-footer">
              Criado por Eletro Descartes &copy; 2025
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('backend/assets/modules/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/stisla.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\EletroDescarte\resources\views/auth/register.blade.php ENDPATH**/ ?>