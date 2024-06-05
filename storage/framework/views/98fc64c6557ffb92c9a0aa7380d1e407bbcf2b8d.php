<?php $__env->startSection('content'); ?>



<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Booking Status</h5>
              <p> Current Status <b><?php echo e($allBooking->status); ?></b> </p>
          <form method="POST" action="<?php echo e(route('update.bookings', $allBooking->id)); ?>" enctype="multipart/form-data">
                <!-- Email input -->
                <?php echo csrf_field(); ?>
                
                <div class="form-outline mb-4 mt-4">

                  <select name="status" class="form-select  form-control" aria-label="Default select example">
                    <option selected>Choose Status</option>
                      <option value="Processing">Processing</option>
                      <option value="Booked Successfully">Booked Successfully</option>
                  </select>
                </div>
                <?php if($errors->has('status')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('status')); ?></p>
                <?php endif; ?>

                <br>
              

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obokashtravel/resources/views/admins/editbooking.blade.php ENDPATH**/ ?>