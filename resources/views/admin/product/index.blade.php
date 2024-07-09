<x-layout>
    <!-- I will pass data to the layout component using prop/properties -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Information</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right ">
                    <a href="/admin/product/create" class="btn btn-purple rounded-pill">Add New Product</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr >
                                        <th>#Id</th>
                                        <th>Thumbnail</th>
                                        <th>Product Name</th>
                                        <th>Product Description</th>
                                        <th>Picture</th>
                                        <th>MRP</th>
                                        <th>Sell Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($products as $product)
                                   <tr class="align-items-center">
                                        <td  style="text-align: center; vertical-align: middle;">{{ $product->id }}</td>
                                        <td >
                                            @if(isset($product->prod_thumbnail_img) && !empty($product->prod_thumbnail_img))
                                            <img width="60" style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('/').ltrim($product->prod_thumbnail_img,'/') }}" />
                                            @else
                                            &#x2D; - &#45;
                                            @endif
                                        </td>
                                        <td  style="text-align: center; vertical-align: middle;">{{$product->product_name}}</td>
                                        <td  style="text-align: center; vertical-align: middle;">{{$product->product_desc}}</td>
                                        <td  style="text-align: center; vertical-align: middle;">
                                            @if(isset($product->prod_main_img) && !empty($product->prod_main_img))
                                            <img width="60" style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('/').ltrim($product->prod_main_img,'/') }}" />
                                            @else
                                            &#x2D; - &#45;
                                            @endif
                                        </td>
                                        <td  style="text-align: center; vertical-align: middle;">{{$product->mrp}}</td>
                                        <td  style="text-align: center; vertical-align: middle;">{{$product->sell_price}}</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary rounded-circle">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-danger rounded-circle delete-button" >
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-layout>
