

<?php $__env->startSection('content'); ?>
<!-- ***** Main Banner Area Start ***** -->
<div class="about-main-content" style="margin-top: -25px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content" >
            <div class="blur-bg"></div>
            <h4>EXPLORE OUR COUNTRY</h4>
            <div class="line-dec"></div>
            <h2>Welcome To <?php echo e($country->name); ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>
            <div class="main-button">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2><?php echo e($country->name); ?>’s <em>Cities &amp; Towns</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo e(asset('assets/images/'.$city->image.'')); ?>  " alt="">
                    <h4><?php echo e($city->name); ?></h4>
                  </div>
                </div>
                

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Weekly Offers In Each City</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
              <div class="thumb">
                <img src="<?php echo e(asset('assets/images/'.$city->image.' ')); ?>" alt="">
                <div class="text">
                  <h4><?php echo e($city->name); ?><br><span></span></h4>
                  <h6>$<?php echo e($city->price); ?><br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> <?php echo e($city->num_days); ?> Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="<?php echo e(route('traveling.reservation',$city->id)); ?>">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="<?php echo e(asset('assets/images/about-left-image.jpg')); ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover More About Our Country</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
          <div class="row">
           
            <div class="col-lg-12">
              <div class="info-item">
                <div class="row">
                  <div class="col-lg-6">
                    <h4><?php echo e($citiesCount); ?>+</h4>
                    <span>Amazing Places</span>
                  </div>
                  <div class="col-lg-6">
                    <h4>240.580+</h4>
                    <span>Different Check-ins Yearly</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          
        </div>
      </div>
    </div>
  </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\obokashtravel\resources\views/traveling/about.blade.php ENDPATH**/ ?>