@extends('admin.layouts.master')
@section('containerBlock')
    <div class="container ">
        <h1 class=" text-primary">View Customer</h1>
    </div>

    <!-- Form Create Invoice -->
    <div class="container d-block shadow-lg p-3">
        <form action="/action_page.php">


            <div class="row">

                <div class=" col-sm-12 mt-3">
                    <div class=" position-relative">
                        <i class="fa fa-search position-absolute
                        top-0 " id="icon_search"
                            aria-hidden="true"></i>
                    </div>
                    <input type="text" class="form-control " placeholder="Search Cutomer Name ...." name="cutomer_name">
                </div>
                <div class="col-sm-12 mt-2">
                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <thead>
                                <tr class="">
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Type of Business</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Type of Business</th>
                                    <th>Option</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">Name-1</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">965364246</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">..........</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">...</div>
                                    </td>
                                    <td>

                                        <button class="btn
                                        btn-danger">
                                            Remove</button>
                                        <button class="btn
                                        btn-primary">Edit
                                        </button>
                                       
                                    </td>
                                </tr>


                            </tbody>
                        </table>



                    </div>

                </div>
            </div>

        </form><br>



        <!-- /.container-fluid -->

    </div>
@endsection
