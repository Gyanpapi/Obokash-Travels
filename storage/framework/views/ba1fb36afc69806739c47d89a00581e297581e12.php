<?php $__env->startSection('content'); ?>



<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Cities</h5>
          <form method="POST" action="<?php echo e(route('store.cities')); ?>" enctype="multipart/form-data">
                <!-- Email input -->
                <?php echo csrf_field(); ?>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>

                <?php if($errors->has('name')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('name')); ?></p>
                <?php endif; ?>

                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control"  />
                 
                </div>
                <?php if($errors->has('image')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('image')); ?></p>
                <?php endif; ?>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="num_days" id="form2Example1" class="form-control" placeholder="trip_days" />
                 
                </div>
                <?php if($errors->has('num_days')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('num_days')); ?></p>
                <?php endif; ?>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />
                 
                </div>
                <?php if($errors->has('price')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('price')); ?></p>
                <?php endif; ?>
                <div class="form-outline mb-4 mt-4">

                  <select name="country_id" class="form-select  form-control" aria-label="Default select example">
                    <option selected>Choose Country</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <?php if($errors->has('country_id')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('country_id')); ?></p>
                <?php endif; ?>

                <br>
              

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\obokashtravel\resources\views/admins/createcities.blade.php ENDPATH**/ ?>