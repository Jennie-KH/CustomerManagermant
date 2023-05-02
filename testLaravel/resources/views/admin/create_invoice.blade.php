@extends('admin.layouts.master')
@section('containerBlock')
    <div class="container ">
        <h1 class=" text-primary">Create New Invoice</h1>
    </div>

    <!-- Form Create Invoice -->
    <div class="container d-block shadow-lg p-3">
        <form action="/action_page.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6 ">
                    <!-- <button id="button" class="btn btn-primary  ">Customer Information </button> <br><br> -->
                    <label for="" id="select_label" name="customer_type" class=" font-weight-bold">Customer:
                    </label>
                    <select class="custom-select " id="inputGroupSelect01 " name="Customer_Name">
                        <option value="1" action>Customer-1</option>
                        <option value="2">Customer-2</option>
                        <option value="2">Customer-3</option>
                    </select>
                </div>
                <div class="col-sm-6 ">
                    <!-- <button id="button" class="btn btn-primary  ">Customer Information </button> <br><br> -->
                    <label for="" id="select_label" name="customer_type" class=" font-weight-bold">Select Type:
                    </label>
                    <select class="custom-select " id="inputGroupSelect01 " name="Customer_Name">
                        <option value="Paid" action>Piad</option>
                        <option value="Overdue">Overdue</option>
                        <option value="Send">Send</option>
                    </select>
                </div><br>
            </div>
            <div class="row">

                <div class=" col-sm-12 mt-3">
                    <div class=" position-relative">
                        <i class="fa fa-search position-absolute top-0 " id="icon_search" aria-hidden="true"></i>
                    </div>
                    <input type="text" class="form-control " placeholder="Search Product Or Service ...."
                        name="invoice_date">
                </div>
                <div class="col-sm-12 mt-2">
                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <thead>
                                <tr class="">
                                    <th>Product or Service </th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Amount</th>
                                    <th>Option</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                $i=0;
                                $count=1;
                                    while ($i <5) {
                                        # code...
                                        ?>
                                <tr>

                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">Product-<?php echo $count++; ?></div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder"><input id="input_pro_qty" type="number"
                                                style="border:none;outline:none;" value="1"></div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder">100</div>
                                    </td>
                                    <td>
                                        <div class=" p-2 shadow" id="product_boder" name="price">7800</div>
                                    </td>
                                    <td>

                                        <button class="btn btn-danger"> Remove</button>
                                        <button class="btn btn-primary">Edit </button>
                                    </td>
                                </tr>

                                <?php
                        
                                $i++;
                                    }
                                    ?>

                                <tr>

                                    <td></td>
                                    <td></td>
                                    <td colspan="3">


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" name="btn_invoice">Create Invoice</button>
        </form><br>
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <div>
                    <div class=" p-2 shadow mt-2" id="product_boder">Discount: <input id="input_pro_qty" type="text"
                            style="border:none;outline:none;" value="0" name="discount"></div>
                    <div class=" p-2 shadow" id="product_boder">Sub Total :..... </div>
                    <div class=" p-2 shadow" id="product_boder">Total :.... </div>
                </div>
            </div>
        </div>

        <!-- /.container-fluid -->


    </div><br><br><br><br><br>
@endsection
