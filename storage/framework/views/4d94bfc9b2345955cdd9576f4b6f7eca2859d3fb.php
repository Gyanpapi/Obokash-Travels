<?php $__env->startSection('content'); ?>


<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="create-admins.html" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">admin name</th>
                    <th scope="col">email</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $__currentLoopData = $allAdmins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row">1</th>
                    <?php echo e($admin->id); ?>

                    <td><?php echo e($admin->adminname); ?></td>
                    <td><?php echo e($admin->email); ?></td>
                   
                  </tr>

                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/wooxtravel/resources/views/admins/allAdmins.blade.php ENDPATH**/ ?>