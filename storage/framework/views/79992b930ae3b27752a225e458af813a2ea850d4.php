<?php $__env->startSection('main_content'); ?>
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Create Award</h4>
                            </div>
                            <div class="card-block">
                                <form  method="POST" action="<?php echo e(route('awards.store')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Award Name</label>
                                                    <input type="text" id="award_name" name="award_name" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Award Description</label>
                                                    <!-- <textarea type="text" id="department-address" name="department-address" class="form-control" required></textarea> -->
                                                    <input type="text" id="award_description" name="award_description" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Gift Item</label>
                                                    <!-- <textarea type="text" id="department_details" name="department_details" class="form-control" required></textarea> -->
                                                    <input type="text" id="gift_item" name="gift_item" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <!-- <textarea type="text" id="department_details" name="department_details" class="form-control" required></textarea> -->
                                                    <input type="date" id="date" name="date" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                                    <input type="hidden" name="employee_id" value="<?php echo e(Auth:: user()->id); ?>">

                                                    <input type="hidden" name="awarded_by" value="<?php echo e(Auth:: user()->id); ?>">
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check-square-o"></i> Submit</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
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