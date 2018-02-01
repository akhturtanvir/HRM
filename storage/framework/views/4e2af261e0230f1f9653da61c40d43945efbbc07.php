<?php $__env->startSection('main_content'); ?>
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#SI No.</th>
                                                <th>Holiday Name</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Number of Days</th>
                                                <th>Announced By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $holidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holiday): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($holiday->id); ?></td>
                                                <td><?php echo e($holiday->holiday_name); ?></td>
                                                <td><?php echo e($holiday->holiday_start_from); ?></td>
                                                <td><?php echo e($holiday->holiday_end_to); ?></td>
                                                <td><?php echo e($holiday->number_of_days); ?></td>
                                                <td><?php echo e($holiday->announced_by); ?></td>
                                                <td>

                                                    <a href='<?php echo e(url("/holidays/{$holiday->id}/edit")); ?>'>
                                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o"></i> Edit</button>
                                                    </a>

                                                    <form method="POST" action='<?php echo e(url("/holidays/{$holiday->id}")); ?>'>
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#SI No.</th>
                                                <th>Holiday Name</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Number of Days</th>
                                                <th>Announced By</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->

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
    <!-- This is data table -->
    <script src="<?php echo e(asset('public/assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <!-- start - This is for export functionality only -->
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="http:///cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('public/assets/plugins/styleswitcher/jQuery.style.switcher.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>