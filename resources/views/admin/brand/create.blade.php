
<x-layout title="Create A Brand"><!-- I will pass data to the layout compoent using prop/ properties -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 a_tbdr">
                    <h1 class="m-0">Add New Brand</h1>
                </div>
                <!-- <div class="col-sm-6 a_tbdr text-right">
                    <a href="{{route('brand.create')}}" class="btn btn-primary">Add New Brands</a>
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
                  @if(Session::has('success'))
                      <script>
                          document.addEventListener('DOMContentLoaded', function() {
                              Swal.fire({
                                  icon: 'success',
                                  title: 'Success',
                                  text: '{{ Session::get('success') }}',
                                  showConfirmButton: false,
                                  timer: 5000
                              });
                          });
                      </script>
                  @endif
                <!-- general form elements -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New Brand</h3>
                        </div>
                        <!-- /.card-header -->
                        
                        <!-- form start -->
                        <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="brand_name">Brand Name</label>
                                    <input  style="border: 1px solid #000;" name="brand_name" type="text" class="form-control" id="_brand_name" placeholder="Enter a brand name">
                                </div>
                                @error('brand_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="brand_desc">Description</label>
                                    <textarea   style="border: 1px solid #000;" rows="10" cols="" name="description" class="form-control" id="brand_desc" placeholder="Password"> </textarea>
                                </div>
                                @error('description')
                                    <div class="alert alert-danger" role="alert" style="background-color: #ff0000; color: #fff;">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    @error('brand_image')
                                        <div class="alert alert-danger"  style="background-color: #ff0000; color: #fff;" role="alert">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputFile">File input (Please upload 2MB less file, jpg , jpeg or png only)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="brand_image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-layout>
