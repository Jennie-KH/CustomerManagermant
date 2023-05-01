@extends('admin.layouts.master')
@section('containerBlock')
    <h1 class=" text-primary text-uppercase">Create New Customer</h1>
    <!-- Form Create Customer -->
    <div class="container d-block shadow-lg p-3" id="bg_customer">
        <form action="/action_page.php">
            <div class="row justify-content-center">

                <div for="exampleFormControlFile1" class="
                shadow" id="Profile">
                    <img src="/image/Cus1.jpg" id="img" alt="">
                </div>



            </div>
            <div class="row mt-3">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="custom-file mb-3">
                        <input type="file" name="customer_image" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose
                            file...</label>
                        <div class="invalid-feedback">Example
                            invalid custom file feedback</div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row mt-2 ">


                <div class="col-sm-6 ">
                    <input type="text " class="form-control " id="customer_name "
                        placeholder="Enter Name " name="customer_name "><br>
                    <input type="text " class="form-control " id="customer_number "
                        placeholder="Enter Phone Number " name="customer_number "><br>
                    <input type="text " class="form-control " id="customer_type "
                        placeholder="Enter Type of bussiness "
                        name="customer_type"><br>
                </div>

                <div class="col-sm-6 ">
                    <input type="text " class="form-control " placeholder="Enter Email " name="customer_email "><br>
                    <input type="text " class="form-control " id="customer_address " placeholder="Enter Address "
                        name="customer_address "><br>
                    <input type="text " class="form-control " id="customer_phy_address "
                        placeholder="Enter Physical Address " name="customer_phy_address "><br>
                </div>
            </div>
            <button type="submit " class="btn btn-primary mt-3
            ">Create Customer</button>
    </div>
    </form><br>
@endsection
