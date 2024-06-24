<x-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brands Information</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-7">
            @if(Session::has('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: '{{ Session::get('success') }}',
                            showConfirmButton: false,
                            timer: 4000
                        });
                    });
                </script>
            @endif
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title text-bold">Brands List:-</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered ">
                    <thead>
                    <tr>
                      <th>#Id</th>
                      <th>Brand Name</th>
                      <th>Brand Logo</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($brands as $brand)
                      <tr >
                        <td  >{{ $brand->id }}</td>
                        <td>{{ $brand->brand_name }}</td>
                        <td>
                          @if(isset($brand->picture) && !empty($brand->picture))
                          <img width="60"  style="display: block; margin-left: auto; margin-right: auto;"  src="{{ asset('/').ltrim($brand->picture,'/') }}" />
                          @else
                          &#x2D; - &#45;
                          @endif
                        </td>
                        <td>
                          <a href="#" class="btn btn-outline-primary rounded-circle">
                              <i class="fa-regular fa-pen-to-square"></i>
                          </a>
                          <a type="button" class="btn btn-outline-danger rounded-circle delete-button a_delcategory" data-id="{{ $brand->id }}">
                              <i class="fa-solid fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card body -->
            </div>
          </div>
          <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title  text-center text-bold" >Add New Brand :-</h1>
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
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      @enderror
                      <!--  <div class="form-group">
                          <label for="brand_desc">Description</label>
                          <textarea   style="border: 1px solid #000;" rows="10" cols="" name="description" class="form-control" id="brand_desc" placeholder="Password"> </textarea>
                      </div>
                      @error('description')
                          <div class="alert alert-danger" role="alert" style="background-color: #ff0000; color: #fff;">{{ $message }}</div>
                      @enderror -->
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
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-layout>