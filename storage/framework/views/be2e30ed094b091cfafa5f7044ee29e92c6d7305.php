<?php $__env->startSection('content'); ?>
  <form class="login100-form validate-form" method="post" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>

    <div class="object">
      <object type="image/svg+xml" data="ORBITLogo.svg" width="65%" align="middle"></object>
    </div>

    
    <div class="wrap-input100 validate-input" data-validate = "Enter Nama">
      <input autocomplete="off" class="input100" type="text" value="<?php echo e(old('username')); ?>" name="name" autofocus>
      <span class="focus-input100 <?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" data-placeholder="Nama"></span>
    </div>
    <?php if($errors->has('name')): ?>
        <i class="error"><?php echo e($errors->first('name')); ?></i>
    <?php endif; ?>

    
    <div class="wrap-input100 validate-input" data-validate = "Enter Username">
      <input autocomplete="off" class="input100" type="text" value="<?php echo e(old('username')); ?>" name="username" autofocus>
      <span class="focus-input100 <?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" data-placeholder="Username"></span>
    </div>
    <?php if($errors->has('username')): ?>
        <i class="error"><?php echo e($errors->first('username')); ?></i>
    <?php endif; ?>

    
    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
      <input autocomplete="off" class="input100" type="email" value="<?php echo e(old('email')); ?>" name="email" autofocus>
      <span class="focus-input100 <?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" data-placeholder="E-Mail"></span>
    </div>
    <?php if($errors->has('email')): ?>
        <i class="error"><?php echo e($errors->first('email')); ?></i>
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

    
    <div class="wrap-input100 validate-input" data-validate="Enter password Confirm">
      <span class="btn-show-pass">
        <i class="zmdi zmdi-eye"></i>
      </span>
      <input class="input100" type="password" name="password_confirmation">
      <span class="focus-input100" data-placeholder="Confirm Password"></span>
    </div>

    <div class="container-login100-form-btn">
      <div class="wrap-login100-form-btn">
        <div class="login100-form-bgbtn"></div>
        <button class="login100-form-btn" type="submit">
          Sign Up
        </button>
      </div>
    </div>

    <div class="text-center p-t-50">
      <span class="txt1">
        Punya Account?
      </span>

      <a class="signUp" href="<?php echo e(route('login')); ?>">
        Login
      </a>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.authentication', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>