@extends('admin.layouts.master')
@section('containerBlock')
    <div class="container ">
        <h1 class="h3 mb-2 text-primary">View Invoice</h1>
    </div>

    <!-- Form Create Invoice -->
    <div class="container d-block shadow-lg p-3">
        <form action="/action_page.php">
            <div class="row">

                <div class=" col-sm-12 mt-3">
                    <div class=" position-relative">
                        <i class="fa fa-search position-absolute top-0 " id="icon_search" aria-hidden="true"></i>
                    </div>
                    <input type="text" class="form-control " placeholder="Search Customer Name ...."
                        name="cutomer_name">
                </div>
                <div class="col-sm-12 mt-2">




                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Option</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Option</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class=" p-2 shadow t" id="product_boder">Jenette Caldwell</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">96536246</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">Type-1</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">2023/09/03</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">2023/09/05</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">paid</div>
                                    </td>
                                    <td>
                                        <a href="" name="edit"><i class="fa fa-edit text-primary" aria-hidden="true"></i></a>
                                        <a href="" name="delete"><i class="fa fa-comment text-success" aria-hidden="true"></i></a>
                                        <a href="" name="comm"><i class="fa fa-trash text-danger"  aria-hidden="true"></i></a>
                                        <a href="" name="pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>


                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </form><br>

        <!-- /.container-fluid -->


    </div><br><br><br><br><br>
    <!-- Page Heading -->
@endsection
