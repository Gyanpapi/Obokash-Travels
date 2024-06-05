<?php $__env->startSection('content'); ?>



<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Countries</h5>
          <form method="POST" action="<?php echo e(route('create.countries')); ?>" enctype="multipart/form-data">
                <!-- Email input -->
                <?php echo csrf_field(); ?>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>

                <?php if($errors->has('name')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('name')); ?></p>
                <?php endif; ?>

                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control" />
                 
                </div>  

                <?php if($errors->has('image')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('image')); ?></p>
                <?php endif; ?>

                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="continent" id="form2Example1" class="form-control" placeholder="continent" />
                 
                </div>
                
                <?php if($errors->has('continent')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('continent')); ?></p>
                <?php endif; ?>

                 <div class="form-outline mb-4 mt-4">
                  <input type="text" name="population" id="form2Example1" class="form-control" placeholder="population" />
                 
                </div>

                <?php if($errors->has('population')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('population')); ?></p>
                <?php endif; ?>
                
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="territory" id="form2Example1" class="form-control" placeholder="territory" />
                 
                </div>
                
                <?php if($errors->has('territory')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('territory')); ?></p>
                <?php endif; ?>

                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="avg_price" id="form2Example1" class="form-control" placeholder="avg_price" />
                 
                </div>
                
                <?php if($errors->has('avg_price')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('avg_price')); ?></p>
                <?php endif; ?>

                <div class="form-floating">
                  <textarea name="description" class="form-control" placeholder="description" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>

                <?php if($errors->has('description')): ?>
                  <p class="alert alert-danger"><?php echo e($errors->first('description')); ?></p>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obokashtravel/resources/views/admins/createcountries.blade.php ENDPATH**/ ?>