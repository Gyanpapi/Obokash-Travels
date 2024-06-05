

<?php $__env->startSection('content'); ?>

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>My Bookings</h4>
         
        </div>
      </div>
    </div>
  </div>


  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Your Bookings</h2>
            <p></p>
          </div>
        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone number</th>
      <th scope="col">number of guests</th>
      <th scope="col">Check in date</th>
      <th scope="col">Destination</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($booking->id); ?> </th>
      <td><?php echo e($booking->name); ?></td>
      <td><?php echo e($booking->phone_number); ?></td>
      <td><?php echo e($booking->destination); ?></td>
      <td><?php echo e($booking->check_ind_date); ?></td>
      <td><?php echo e($booking->destination); ?></td>
      <td><?php echo e($booking->price); ?></td>
      <td><?php echo e($booking->status); ?></td>
      
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
       
       
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/obokashtravel/resources/views/users/bookings.blade.php ENDPATH**/ ?>