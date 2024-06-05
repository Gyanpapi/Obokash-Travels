<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo e(asset('assets/styles/style.css')); ?> " rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">Obokash Travels</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <?php if(auth()->guard('admin')->check()): ?>
          <ul class="navbar-nav side-nav" >
            <li class="nav-item">
              <a class="nav-link" style="margin-left: 20px;" href="<?php echo e(route('admins.dashboard')); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('admins.all.admins')); ?>" style="margin-left: 20px;">Admins</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('all.countries')); ?>" style="margin-left: 20px;">Countries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('all.cities')); ?>" style="margin-left: 20px;">Cities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('all.bookings')); ?>" style="margin-left: 20px;">Bookings</a>
            </li>
          </ul>
        <?php endif; ?>
        <ul class="navbar-nav ml-md-auto d-md-flex">

          <?php if(auth()->guard('admin')->check()): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('admins.dashboard')); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo e(Auth::guard('admin')->user()->name); ?>

              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                  <?php echo csrf_field(); ?>
                </form>
                
            </li>

          <?php else: ?>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('view.login')); ?>">login
              </a>
            </li>
          <?php endif; ?>                
          
        </ul>
      </div>
    </div>
    </nav>
    <div class="container-fluid">

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\obokashtravel\resources\views/layouts/admin.blade.php ENDPATH**/ ?>