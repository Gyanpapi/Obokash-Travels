<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <?php if(session()->has('update')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session()->get('update')); ?>

                  </div>
              <?php endif; ?>
              <?php if(session()->has('delete')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session()->get('delete')); ?>

                  </div>
              <?php endif; ?>
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">phone_number</th>
                    <th scope="col">num_of_geusts</th>
                    <th scope="col">checkin_date</th>
                    <th scope="col">destination</th>
                    <th scope="col">status</th>
                    <th scope="col">payment</th>
                    <th scope="col">change status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $allBookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($booking->id); ?></th>
                            <td><?php echo e($booking->name); ?></td>
                            <td><?php echo e($booking->phone_number); ?></td>
                            <td><?php echo e($booking->num_guests); ?></td>
                            <td><?php echo e($booking->check_in_date); ?></td>
                            <td><?php echo e($booking->destination); ?></td>
                            <td><?php echo e($booking->status); ?></td>
                            <td><?php echo e($booking->price); ?></td>
                            <td><a href="<?php echo e(route('edit.bookings', $booking->id)); ?>" class="btn btn-warning  text-center ">change status</a></td>
                            <td><a href="<?php echo e(route('delete.bookings', $booking->id)); ?>" class="btn btn-danger  text-center ">delete</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  

                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obokashtravel/resources/views/admins/allbookings.blade.php ENDPATH**/ ?>