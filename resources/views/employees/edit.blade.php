@extends('layout')
@section('main_content')
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Edit Employee</h4>
                            </div>
                            <div class="card-block">
                                <form  method="POST" action='{{url("/employees/{$employees->id}")}}'>
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="user_id" value="{{ Auth:: user()->id}}">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" >First Name</label>
                                                    <input type="text" value="{{$employees->firstname}}" id="firstname" name="firstname" class="form-control" placeholder="John" required>
                                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" value="{{$employees->lastname}}" id="lastname" name="lastname" class="form-control" placeholder="doe" required>
                                                    <small class="form-control-feedback"> This is last name </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" >Gender</label>
                                                    <select class="form-control custom-select" value="{{$employees->firstname}}" name="gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <small class="form-control-feedback"> Select your gender </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date"  value="{{$employees->dob}}"name="dob" class="form-control" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                            
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" value="{{$employees->street}}" name="street" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" value="{{$employees->city}}" name="city" class="form-control" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" value="{{$employees->state}}" name="state" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="text" value="{{$employees->postalcode}}" name="postalcode" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="form-control custom-select" name="country">
                                                        <option>--Select your Country--</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="India">India</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="USA">USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" value="{{$employees->email}}" name="email" class="form-control" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="number" value="{{$employees->mobile}}" name="mobile" class="form-control" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Update</button>
                                        <a href="{{url('/employees')}}">
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
    