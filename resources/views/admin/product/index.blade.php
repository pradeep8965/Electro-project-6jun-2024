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
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example3" class="table table-bordered">
                                <thead>
                                    <tr >
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product Description</th>
                                        <th>Brand</th>
                                        <th>CategoryName</th>
                                        <th>Thumbnail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($products as $product)
                                   <tr class="align-items-center">
                                         <td style="text-align: center; vertical-align: middle;">{{ $product->product_id }}</td>
                                        <td  style="text-align: center; vertical-align: middle;">{{$product->product_name}}</td>
                                        <td  style="text-align: center; vertical-align: middle;">{{$product->product_desc}}</td>
                                        <td>{{$product->brand_name}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td >
                                            @if(isset($product->prod_thumbnail_img) && !empty($product->prod_thumbnail_img))
                                            <img width="60" style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('/').ltrim($product->prod_thumbnail_img,'/') }}" />
                                            @else
                                            &#x2D; - &#45;
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/product/{{$product->product_id}}" class="btn btn-outline-info rounded-circle btn-sm">
                                                <i class="fa-regular fa-eye"></i>   
                                            </a>
                                            <a href="/admin/product/{{$product->product_id}}/edit" class="btn btn-outline-info rounded-circle btn-sm">
                                                <i class="fa-regular fa-pen-to-square"></i>   
                                            </a>
                                            <form method="POST" action="/admin/product/{{$product->product_id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger rounded-circle btn-sm"  onclick="return confirm('Do you really want to delete this product?')">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
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