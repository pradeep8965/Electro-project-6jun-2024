<x-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brands Information</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right ">
                    <a href="/admin/brand/create" class="btn btn-info rounded-pill">Add New Brand</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Brands List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#Id</th>
                    <th>Brand Name</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Action</th>
                    <th>Action2</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($brands as $brand)
                    <tr>
                      <td>{{ $brand->id }}</td>
                      <td>{{ $brand->brand_name }}</td>
                      <td>{{ $brand->description }}</td>
                      <td>
                        @if(isset($brand->picture) && !empty($brand->picture))
                        <img width="100" src="{{ asset('/').ltrim($brand->picture,'/') }}" />
                        @else
                        &#x2D; - &#45;
                        @endif
                      </td>
                      <td>
                        <a href="#" class="btn btn-outline-primary rounded-circle">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <form method="POST" action="{{url('/')}}/admin/brand/{{$brand->brand_id}}">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-outline-danger rounded-circle delete-button a_delcategory" data-id="{{ $brand->id }}">
                              <i class="fa-solid fa-trash"></i>
                          </button>
                      </form>
                      </td>
                      <td> 
                        <!-- Adding the new switch input -->
                        <div class="text-center mt-4 ">
                                <label class="custom-toggle">
                                    <input type="checkbox" onchange="updateSettings(this, 'color_filter_activation')" checked="">
                                    <span class="slider round"></span>
                                </label>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-layout>