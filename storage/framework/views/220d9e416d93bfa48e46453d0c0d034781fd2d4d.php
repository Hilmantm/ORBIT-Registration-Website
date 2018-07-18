<?php $__env->startSection('content'); ?>
  <form class="login100-form validate-form" method="post" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>

    <div class="object">
      <object type="image/svg+xml" data="ORBITLogo.svg" width="65%" align="middle"></object>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter Username">
      <input autocomplete="off" class="input100" type="text" value="<?php echo e(old('username')); ?>"
      name="username" autofocus>
      <span class="focus-input100 <?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" data-placeholder="Username"></span>
    </div>
    <?php if($errors->has('username')): ?>
        <i class="error"><?php echo e($errors->first('username')); ?></i>
    <?php endif; ?>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
      <span class="btn-show-pass">
        <i class="zmdi zmdi-eye"></i>
      </span>
      <input class="input100" type="password" name="password" value="<?php echo e(old('password')); ?>">
      <span class="focus-input100 <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" data-placeholder="Password"></span>
    </div>
    <?php if($errors->has('password')): ?>
        <i class="error"><?php echo e($errors->first('password')); ?></i>
    <?php endif; ?>

    <label class="rememberMe">Remember Me
      <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
      <span class="checkmark"></span>
    </label>

    <div class="container-login100-form-btn">
      <div class="wrap-login100-form-btn">
        <div class="login100-form-bgbtn"></div>
        <button class="login100-form-btn" type="submit">
          Login
        </button>
      </div>
    </div>

    <div class="container-login100-form-btn">
      <div class="wrap-login100-form-btn">
        <div class="login100-form-bgbtn"></div>
        <a class="login100-form-btn" href="<?php echo e(route('register')); ?>">
          Sign Up
        </a>
      </div>
    </div>

    <div class="text-center p-t-50">
      <span class="txt1">
        Lupa Password?
      </span>

      <a class="signUp" href="<?php echo e(route('password.request')); ?>">
        Klik disini!
      </a>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.authentication', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>