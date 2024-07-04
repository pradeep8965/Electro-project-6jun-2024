
<x-layout title="Create Category"><!-- I will pass data to the layout compoent using prop/ properties -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 a_tbdr">
                    <h1 class="m-0 fs-1 text-bold" style="  text-shadow: 2px 2px ; font-family:'Arial',; padding: 10px;">Add New Unit...</h1>
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
                  @if(Session::has('success'))
                      <script>
                          document.addEventListener('DOMContentLoaded', function() {
                              Swal.fire({
                                  icon: 'success',
                                  title: 'Success',
                                  text: "{{ Session::get('success') }}",
                                  showConfirmButton: false,
                                  timer: 5000
                              });
                          });
                      </script>
                  @endif
                <!-- general form elements -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New Unit</h3>
                        </div>
                        <!-- /.card-header -->
                        
                        <!-- form start -->
                        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="unit_name">Unit Name</label>
                                    <input  type="text" name="unit_name"  class="form-control" id="unit_name"  style="border: 1px solid #000;" placeholder="Enter Unit Name ">
                                </div>
                                @error('unit_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="unit_desc">Description</label>
                                    <textarea style="border: 1px solid #000;" rows="3" cols="" name="unit_desc" class="form-control" id="unit_desc" placeholder=""> </textarea>
                                </div>
                                @error('unit_desc')
                                    <div class="alert alert-danger" role="alert" style="background-color: #ff0000; color: #fff;">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-dark">Submit</button>
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
