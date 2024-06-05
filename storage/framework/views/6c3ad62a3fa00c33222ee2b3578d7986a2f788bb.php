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
              <h5 class="card-title mb-4 d-inline">Cities</h5>
              <a  href="<?php echo e(route('create.cities')); ?>" class="btn btn-primary mb-4 text-center float-right">Create cities</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">trip_days</th>
                    <th scope="col">price</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($city->id); ?></th>
                            <td><?php echo e($city->name); ?></td>
                            <td><img width='60' height='60' src="<?php echo e(asset('assets/images/'.$city->image.'')); ?>"></td>
                            <td><?php echo e($city->num_days); ?></td>
                            <td><?php echo e($city->price); ?></td>
                            <td><a href="<?php echo e(route('delete.cities',$city->id)); ?>" class="btn btn-danger  text-center ">delete</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\obokashtravel\resources\views/admins/allcities.blade.php ENDPATH**/ ?>