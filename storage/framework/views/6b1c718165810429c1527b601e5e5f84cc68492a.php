<?php echo $__env->make('layouts.top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!--============ Hero Form ==========================================================================-->

                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>My Offer</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link  icon" href="">
                                    <i class="fa fa-user"></i>My Profile
                                </a>
                                <a class="nav-link active icon" href="<?php echo e(url('/offer')); ?>">
                                    <i class="fa fa-heart"></i>My job offers
                                </a>
                                <a class="nav-link icon" href="<?php echo e(url('/service')); ?>">
                                    <i class="fa fa-star"></i>My service listings
                                </a>
                                <a class="nav-link icon" href="#">
                                    <i class="fa fa-recycle"></i>My reviews 
                                </a>
                                <a class="nav-link icon" href="#">
                                    <i class="fa fa-check"></i>Logout
                                </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <!--============ Section Title===================================================================-->
                            
                            <!--============ Items ==========================================================================-->
                            <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="<?php echo e(url('offer/create')); ?>" class="btn btn-primary">Add offer</a>
<br>
<br>
                                <?php $__currentLoopData = $offer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="ribbon-featured">Recent</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">
                                                        <?php echo e($item->category->name); ?>

                                                </a>
                                                <a href="<?php echo e(url('/offer',$item->id)); ?>" class="title"><?php echo e($item->offertitle); ?></a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="">
                                            <a style="text-decoration:none;">
                                                <?php echo e($item->district->name); ?>,<?php echo e($item->province->name); ?>

                                            </a>
                                        </h4>
                                        <div class="admin-controls">
                                            <a href="<?php echo e(url('/offer',$item->id)); ?>">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <a href="#" class="ad-remove">
                                                <i class="fa fa-trash"></i>Remove
                                            </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p><?php echo e($item->description); ?></p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!--end item-->
                                    </div>
                                </div>
                                <!--end item-->
                            </div>
                            <!--end items-->
                        </div>
                        <!--end col-md-9-->

                        
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

<?php echo $__env->make('layouts.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
