@extends('backend.layout')
@section('title','Employee Info Add | EST')
@push('css')
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
@endpush

@section('maincontent')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Add Employee Info</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Employee Info
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                            href="app-todo.html"><i class="me-1"
                                                                                                    data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                                                               href="app-chat.html"><i class="me-1"
                                                                                                       data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                                                               href="app-email.html"><i class="me-1"
                                                                                                        data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                                                                href="app-calendar.html"><i class="me-1"
                                                                                                            data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-8 col-12 content-body">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Employee Information</h4>
                                </div>

                                <div class="card-body">
                                    <form action="/admin/store"
                                          method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer Name</label>

                                            <input type="text" id="basic-addon-name" class="form-control" name="name"
                                                   placeholder="Name" aria-label="Name"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your employee name</div>
                                        </div>


                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer age</label>

                                            <input type="text" id="basic-addon-name" class="form-control"
                                                   placeholder="Please enter your employee age" aria-label="age"
                                                   name="age"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your employee age</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's birth
                                                date</label>

                                            <input type="date" id="basic-addon-name" class="form-control"
                                                   placeholder="Please enter your employee's birth date"
                                                   aria-label="birthdate" name="birthdate"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your employee's birth date</div>
                                        </div>


                                        <div class="mb-1">
                                            <label class="form-label" for="basic-default-email1">Enter Employee's Email
                                                id</label>
                                            <input type="email" id="basic-default-email1" class="form-control"
                                                   name="email"
                                                   placeholder="Enter Email id" aria-label="Enter Email id"
                                                   required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter a valid email</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's address</label>

                                            <input type="text" id="basic-addon-name" class="form-control"
                                                   placeholder="Please enter your employee's address"
                                                   aria-label="Address" name="address"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter valid info!</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's Contact
                                                no</label>

                                            <input type="text" id="basic-addon-name" class="form-control"
                                                   placeholder="Please Employeer's Contact no" aria-label="contactNo"
                                                   name="contactNo"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter valid info!</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="select-qualification">Recent
                                                Qualification</label>
                                            <select class="form-select" id="select-qualification" name="qualification"
                                                    required>
                                                <option value="">Select Degree</option>
                                                <option value="PHD">PHD</option>
                                                <option value="Masters's">Masters's</option>
                                                <option value="Honors">Honors</option>
                                                <option value="HSC">HSC</option>
                                                <option value="SSC">SSC</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select your recent qualification</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's recent
                                                result</label>

                                            <input type="text" id="basic-addon-name" class="form-control"
                                                   placeholder="Please Employeer's recent result"
                                                   aria-label="recentResult"
                                                   name="recentResult" aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter valid info!</div>
                                        </div>


                                        <div class="mb-1">
                                            <label for="validationCustomUsername" class="form-label">Emoplyee Job
                                                ID</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="jobid" required/>
                                                <div class="invalid-feedback">Please input employee job id.</div>
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="validationCustomUsername" class="form-label">Emoplyee Dept
                                                ID</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="deptId" required/>
                                                <div class="invalid-feedback">Please input employee dept id.</div>
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="validationCustomUsername" class="form-label">Emoplyee
                                                Designation</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="designation"
                                                       required/>
                                                <div class="invalid-feedback">Please input employee Designation</div>
                                            </div>
                                        </div>


                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's join
                                                date</label>

                                            <input type="date" id="basic-addon-name" class="form-control"
                                                   placeholder="Please enter your employee's join date"
                                                   aria-label="joindate" name="joindate"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your employee's join date</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's permanentDate
                                                date</label>

                                            <input type="date" id="basic-addon-name" class="form-control"
                                                   placeholder="Please enter your employee's permanent date"
                                                   aria-label="permanentDate" name="permanentDate"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your employee's permanent date
                                            </div>
                                        </div>


                                        <div class="mb-1">
                                            <label for="validationCustomUsername" class="form-label">Emoplyee Basic
                                                Salary Scale</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="basicSalary"
                                                       required/>
                                                <div class="invalid-feedback">Please input employee Salary Scale</div>
                                            </div>
                                        </div>


                                        <div class="mb-1">
                                            <label for="validationCustomUsername" class="form-label">Emoplyee Basic
                                                Salary Scale</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="basicSalary"
                                                       required/>
                                                <div class="invalid-feedback">Please input employee Salary Scale</div>
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's permanentDate
                                                date</label>

                                            <input type="date" id="basic-addon-name" class="form-control"
                                                   placeholder="Please enter your employee's permanent date"
                                                   aria-label="permanentDate" name="permanentDate"
                                                   aria-describedby="basic-addon-name" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your employee's permanent date
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="validationCustomUsername" class="form-label">Emoplyee Basic
                                                Salary Scale</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="basicSalary"
                                                       required/>
                                                <div class="invalid-feedback">Please input employee Salary Scale</div>
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="validationCustomUsername" class="form-label">Emoplyee Salary
                                                Amount</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="salaryAmount"
                                                       required/>
                                                <div class="invalid-feedback">Please input employee Salary amount</div>
                                            </div>
                                        </div>


                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Employeer's Promotion
                                                date</label>

                                            <input type="date" id="basic-addon-name" class="form-control"
                                                   placeholder="Please enter your employee's permanent date"
                                                   aria-label="promotionDate" name="promotionDate"
                                                   aria-describedby="basic-addon-name"/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your employee's Promotion date
                                            </div>
                                        </div>
                                        {{--                                        <div class="mb-1">--}}
                                        {{--                                            <label class="d-block form-label" for="validationBioBootstrap">Bio</label>--}}
                                        {{--                                            <textarea class="form-control" id="validationBioBootstrap"--}}
                                        {{--                                                      name="validationBioBootstrap" rows="3" required></textarea>--}}
                                        {{--                                        </div>--}}
                                        <div class="mb-1">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                       id="validationCheckBootstrap" required/>
                                                <label class="form-check-label" for="validationCheckBootstrap">Agree to
                                                    our terms and conditions</label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->


                    </div>
                </section>
                <!-- /Validation -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@push('js')
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../../../app-assets/js/scripts/forms/form-validation.js"></script>
@endpush

