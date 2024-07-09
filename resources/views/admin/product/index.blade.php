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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Product Name</th>
                                        <th>Thumbnail</th>
                                        <th>Product Description</th>
                                        <th>Picture</th>
                                        <th>MRP</th>
                                        <th>Sell Price</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td>A</td>
                                        <td>B</td>
                                        <td>C</td>
                                        <td>D</td>
                                        <td>E</td>
                                        <td>F</td>
                                        <td>G</td>
                                        
                                    </tr>
                                   
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
