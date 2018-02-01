@extends('layout')
@section('main_content')
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
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Mobile Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                            <tr>
                                                <td>{{$employee->id}}</td>
                                                <td>{{$employee->firstname}}</td>
                                                <td>{{$employee->lastname}}</td>
                                                <td>{{$employee->gender}}</td>
                                                <td>{{$employee->dob}}</td>
                                                <td>{{$employee->mobile}}</td>
                                                <td>
                                                    <a href='{{url("/employees/{$employee->id}")}}'>
                                                        <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-user"></i> Profile</button>
                                                    </a>

                                                    <a href='{{url("/employees/{$employee->id}/edit")}}'>
                                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o"></i> Edit</button>
                                                    </a>

                                                    <form method="POST" action='{{url("/employees/{$employee->id}")}}'>
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE')}}
                                                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Mobile Number</th>
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
@endsection

@section('js_content')
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('public/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('public/assets/plugins/bootstrap/js/tether.min.js')}}"></script>
    <!-- <script src="{{asset('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script> -->
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('public/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <!-- <script src="{{asset('public/js/waves.js')}}"></script> -->
    <!--Menu sidebar -->
    <script src="{{asset('public/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('public/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <!-- <script src="{{asset('public/js/custom.min.js')}}"></script> -->
    <!-- This is data table -->
    <script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
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
    <script src="{{asset('public/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

@endsection