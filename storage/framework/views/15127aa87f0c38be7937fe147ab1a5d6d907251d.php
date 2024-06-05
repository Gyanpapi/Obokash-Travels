<?php $__env->startSection('content'); ?>


<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <?php if(session()->has('create')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session()->get('create')); ?>

                  </div>
              <?php endif; ?>
              <?php if(session()->has('delete')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session()->get('delete')); ?>

                  </div>
              <?php endif; ?>
              <h5 class="card-title mb-4 d-inline">Countries</h5>
             <a  href="<?php echo e(route('create.countries')); ?>" class="btn btn-primary mb-4 text-center float-right">Create Country</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">continent</th>
                    <th scope="col">population</th>
                    <th scope="col">territory</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $allCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row">
                            <?php echo e($country->id); ?>

                            </th>
                            <td><?php echo e($country->name); ?></td>
                            <td><?php echo e($country->continent); ?></td>
                            <td><?php echo e($country->population); ?></td>
                            <td><?php echo e($country->territory); ?></td>
                            <td><a href="<?php echo e(route('delete.countries', $country->id)); ?>" class="btn btn-danger  text-center ">Delete</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/wooxtravel/resources/views/admins/allcountries.blade.php ENDPATH**/ ?>