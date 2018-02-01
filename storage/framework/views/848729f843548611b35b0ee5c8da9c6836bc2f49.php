<?php $__env->startSection('main_content'); ?>
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Edit Notice</h4>
                            </div>
                            <div class="card-block">
                                <form  method="POST" action='<?php echo e(url("/notices/{$notices->id}")); ?>'>
                                    <?php echo e(method_field('PUT')); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Notice Type</label>
                                                    <input type="text" id="notice_type" value="<?php echo e($notices->notice_type); ?>" name="notice_type" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Notice Description</label>
                                                    <!-- <textarea type="text" id="department-address" name="department-address" class="form-control" required></textarea> -->
                                                    <input type="text" id="notice_description" value="<?php echo e($notices->notice_description); ?>" name="notice_description" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Notice Date</label>
                                                    <!-- <textarea type="text" id="department_details" name="department_details" class="form-control" required></textarea> -->
                                                    <input type="date" id="notice_date" value="<?php echo e($notices->notice_date); ?>" name="notice_date" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                                    <input type="hidden" name="notice_by" value="<?php echo e(Auth:: user()->id); ?>">
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Update</button>
                                        <a href="<?php echo e(url('/notices')); ?>">
                                        <button type="button" class="btn btn-inverse"><i class="fa fa-hand-o-left"></i> Back</button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row -->

                <!-- ============================================================== -->

                <!-- End Page Content -->                
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js_content'); ?>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('public/assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo e(asset('public/assets/plugins/bootstrap/js/tether.min.js')); ?>"></script>
    <!-- <script src="<?php echo e(asset('public/assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script> -->
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo e(asset('public/js/jquery.slimscroll.js')); ?>"></script>
    <!--Wave Effects -->
    <!-- <script src="<?php echo e(asset('public/js/waves.js')); ?>"></script> -->
    <!--Menu sidebar -->
    <script src="<?php echo e(asset('public/js/sidebarmenu.js')); ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo e(asset('public/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')); ?>"></script>
    <!--Custom JavaScript -->
    <!-- <script src="<?php echo e(asset('public/js/custom.min.js')); ?>"></script> -->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('public/assets/plugins/styleswitcher/jQuery.style.switcher.js')); ?>"></script>
    <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>