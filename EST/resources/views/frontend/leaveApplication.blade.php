@extends('frontend.layout')
@section('title','Employee2 | EST')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Leave Application</h4>
                </div>
                <div class="card-body">
                    <form action="/storeLeave" method="post">
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
                            <label class="col-form-label col-md-2">Department</label>
                            <div class="col-md-10">
                                <input type="text" id="basic-addon-name" class="form-control"
                                       placeholder="Please enter your department name" aria-label="dept"
                                       name="dept"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Leave Reason</label>
                            <div class="col-md-10">
                                <input type="reason" id="basic-addon-name" class="form-control"
                                       placeholder="Describe leave reason"
                                       aria-label="reason" name="reason"
                                       aria-describedby="basic-addon-name" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Total Leave</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-leave" name="leave"
                                        required>
                                    <option value="">Select leave</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
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
