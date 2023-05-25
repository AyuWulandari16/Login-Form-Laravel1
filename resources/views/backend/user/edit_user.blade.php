@extends('admin.admin_master')

<!-- section content diambil dari yield yang ada di admin master -->
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update User</h4>
                    <!-- <p class="card-description">
                            App <code>Add User</code>
                        </p> -->
                    <form method="post" action="{{ route('users.update', $editData->id)}}" class="form-sample">
                        @csrf
                        <!-- <p class="card-description">
                                        Personal info
                                    </p> -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-description">
                                    Group User <span class="text-danger">*</span>
                                </p>
                                <div class="form-group row">
                                    <!-- <h5>Grup User <span class="text-danger">*</span></h5> -->
                                    <!-- <label class="col-sm-3 col-form-label">Grup User</label> -->
                                    <div class="col-sm-12" placeholder="Select User Group">
                                        <select name="selectUser" id="selectUser" required class="form-control">
                                            <option value="">Select User Group</option>
                                            <option value="Admin" {{($editData->usertype=="Admin"? "selected":"")}}>Admin</option>
                                            <option value="User" {{($editData->usertype=="User"? "selected":"")}}>User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="card-description">
                                    Name <span class="text-danger">*</span>
                                </p>
                                <div class="form-group row">
                                    <!-- <h5>Nama <span class="text-danger">*</span></h5> -->
                                    <!-- <label class="col-sm-3 col-form-label">Nama</label> -->
                                    <div class="col-sm-12">
                                        <input class="form-control" placeholder="" type="text" name="textNama" value="{{$editData->name}}" required
                                            data-validation-required-message="This field is required" />
                                            <small>Add <code>required</code> attribute to field for required
                                            validation.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-description">
                                    Email <span class="text-danger">*</span>
                                </p>
                                <div class="form-group row">
                                    <!-- <h5>Email<span class="text-danger">*</span></h5> -->
                                    <!-- <label class="col-sm-3 col-form-label">Email</label> -->
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" name="email" value="{{$editData->email}}" required
                                            data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <p class="card-description">
                                    Password <span class="text-danger">*</span>
                                </p>
                                <div class="form-group row"> -->
                                    <!--  -->
                                    <!-- <h5>Password<span class="text-danger">*</span></h5> -->
                                    <!-- <label class="col-sm-3 col-form-label">Password</label> -->
                                    <!--  -->
                                    <!-- <div class="col-sm-12">
                                        <input type="password" class="form-control" name="password" required
                                            data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<!-- plugin js for this page -->
<script src="{{asset('backend/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
<script src="{{asset('backend/vendors/select2/select2.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('backend/js/file-upload.js')}}"></script>
<script src="{{asset('backend/js/typeahead.js')}}"></script>
<script src="{{asset('backend/js/select2.js')}}"></script>
