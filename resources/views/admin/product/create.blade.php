<x-layout title=""><!-- I will pass data to the layout compoent using prop/ properties -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 a_tbdr">
                <h1 class="m-0 fs-1 text-bold" style="  text-shadow: 2px 2px ; font-family:'Arial',; padding: 10px;">Add New Product</h1>
                </div>
                <!-- <div class="col-sm-6 a_tbdr text-right">
                    <a href="{{route('category.create')}}" class="btn btn-primary">Add New Category</a>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" >Product Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input required="text" name="product_name" class="form-control" id="product_name" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="product_desc">Product Description</label>
                                    <textarea required name="product_desc" class="form-control" id="product_desc" placeholder=""></textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="unit_id">Unit</label>
                                            <select required name="unit_id" id="unit_id" class="select2" style="width: 100%;">
                                                @foreach($units as $unit)
                                                    <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select required name="brand_id" class="select2" style="width: 100%;">
                                                @foreach($brands as $brand)
                                                    <option  value="{{ $brand->id }}">{{$brand->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select required name="category_id" class="select2" style="width: 100%;">
                                                @foreach($categories as $category)
                                                <option  value="{{ $category->category_id }}">{{$category->category_name}}</option>  
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mrp">MRP</label>
                                            <input required id="mrp" name="mrp" type="number" class="form-control" min="1" placeholder="MRP..."/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="sell_price">Sell Price</label>
                                            <input required id="sell_price" name="sell_price" type="number" class="form-control"  min="1"  placeholder="Selling Price"/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="qty_available">Available Quantity</label>
                                            <input required id="qty_available" name="qty_available" type="number" class="form-control"   min="1" placeholder="Enter Quantity"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Thumbnail (212 × 200)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input required name="prod_thumbnail_img" type="file" class="custom-file-input" id="prod_thumbnail_img">
                                            <label class="custom-file-label" for="prod_thumbnail_img">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text"  style="background-color: #000; color: #fff; " >Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Main Image (720 × 660)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input  required   name="prod_main_img"type="file" class="custom-file-input" id="prod_main_img">
                                            <label class="custom-file-label" for="prod_main_img">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text"  style="background-color: #000; color: #fff; " >Upload</span>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-dark">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>