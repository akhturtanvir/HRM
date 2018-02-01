@extends('layout')
@section('main_content')
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Create Application</h4>
                            </div>
                            <div class="card-block">
                                <form  method="POST" action="{{ route('leaveapplications.store') }}">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Select Employee Name</label>
                                                    <select class="form-control custom-select" name="employee_name">
                                                        <option>--Select Employee Name--</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Stewart">Stewart</option>
                                                        <option value="Ema" >Ema</option>
                                                        <option value="Watson">Watson</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Apply Date</label>
                                                    <input type="date" name="apply_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Appliation Start Date</label>
                                                    <input type="date" name="application_start_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Appliation end Date</label>
                                                    <input type="date" name="application_end_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Approve Start Date</label>
                                                    <input type="date" name="approve_start_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Approve end Date</label>
                                                    <input type="date" name="approve_end_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Approve Date</label>
                                                    <input type="date" name="approve_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Reason</label>
                                                    <input type="text" name="reason" class="form-control" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Leave Type</label>
                                                    <input type="text" name="leave_type" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                                    <input type="hidden" name="approve_by" value="{{ Auth:: user()->id}}">
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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('public/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    @endsection
    