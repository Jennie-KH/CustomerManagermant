@extends('admin.layouts.master')
@section('containerBlock')
    <h1 class=" text-primary">Create New Product</h1>
    <!-- Form Create Invoice -->
    <div class="container d-block shadow-lg p-3">

        <!-- Form Product-->
        <form action="/action_page.php ">
            <div class="row  mb-2">
                <div class="col-sm-6">
                    <input type="text " class="form-control  " id="product_name " placeholder="Enter Product Name "
                        name="product_name "> <br>
                    <input type="text " class="form-control  " id="product_des " placeholder="Enter Product Description "
                        name="product_des ">

                </div>
                <div class="col-sm-6 d-flex">
                    <div class="col-6"><input type="text " class="form-control  " id="product_qty "
                            placeholder="Quantity" name="product_qty "></div>
                    <div class="col-6"><input type="text " class="form-control  " id="product_price " placeholder="Price"
                            name="product_price "></div>
                </div>
            </div>
            <button type="submit " class="btn btn-primary">Create Product</button>
        </form>
     

    </div>
@endsection
