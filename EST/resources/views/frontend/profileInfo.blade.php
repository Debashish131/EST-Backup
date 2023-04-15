@extends('frontend.layout')
@section('title','Employee2 | EST')
@section('maincontent')
    <!-- Page Wrapper -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Profile Input</h4>
                </div>
                <div class="card-body">
                    <form action="/storeData" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Name</label>
                            <div class="col-md-10">
                                <input type="text" id="basic-addon-name" class="form-control" name="name"
                                       placeholder="Enter your name" aria-label="Name"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Age</label>
                            <div class="col-md-10">
                                <input type="text" id="basic-addon-name" class="form-control"
                                       placeholder="Please enter your employee age" aria-label="age"
                                       name="age"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Employee Birthday</label>
                            <div class="col-md-10">
                                <input type="date" id="basic-addon-name" class="form-control"
                                       placeholder="Please enter your employee's birth date"
                                       aria-label="birthdate" name="birthdate"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-10">
                                <input type="email" id="basic-default-email1" class="form-control"
                                       name="email"
                                       placeholder="Enter Email id" aria-label="Enter Email id"
                                       required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Address</label>
                            <div class="col-md-10">
                                <input type="text" id="basic-addon-name" class="form-control"
                                       placeholder="Please enter your employee's address"
                                       aria-label="Address" name="address"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Contact No</label>
                            <div class="col-md-10">
                                <input type="text" id="basic-addon-name" class="form-control"
                                       placeholder="Please enter your employee's Contact no"
                                       aria-label="contactNo" name="contactNo"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Designation</label>
                            <div class="col-md-10">
                                <input type="text" id="basic-addon-name" class="form-control"
                                       placeholder="Please enter your employee's Designation"
                                       aria-label="contactNo" name="designation"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Qualification</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-qualification" name="qualification"
                                        required>
                                    <option value="">Select Degree</option>
                                    <option value="PHD">PHD</option>
                                    <option value="Masters's">Masters's</option>
                                    <option value="Honors">Honors</option>
                                    <option value="HSC">HSC</option>
                                    <option value="SSC">SSC</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Recent Result</label>
                            <div class="col-md-10">
                                <input type="text" id="basic-addon-name" class="form-control"
                                       placeholder="Please Employeer's recent result"
                                       aria-label="recentResult"
                                       name="recentResult" aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>

                        <br>
                        <br><br>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



@endsection
