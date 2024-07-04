<x-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brands Information</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7">
                    @if(Session::has('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: "{{ Session::get('success')}}",
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
                        <div class="card-body">
                            <table id="example1" class="table table-bordered">
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
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->brand_name }}</td>
                                        <td>
                                            @if(isset($brand->picture) && !empty($brand->picture))
                                            <img width="60" style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('/').ltrim($brand->picture,'/') }}" />
                                            @else
                                            &#x2D; - &#45;
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('brand.edit', $brand->id) }}" class="btn btn-outline-primary rounded-circle">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-danger rounded-circle delete-button" data-id="{{ $brand->id }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $brand->id }}" action="{{ route('brand.destroy', $brand->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title text-center text-bold">{{ isset($editBrand) ? 'Edit Brand' : 'Add New Brand' }} :-</h1>
                        </div>
                        <form action="{{ isset($editBrand) ? route('brand.update', $editBrand->id) : route('brand.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($editBrand))
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="brand_name">Brand Name</label>
                                    <input style="border: 1px solid #000;" name="brand_name" type="text" class="form-control" id="_brand_name" placeholder="Enter a brand name" value="{{ isset($editBrand) ? $editBrand->brand_name : '' }}">
                                </div>
                                @error('brand_name')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="form-group">
                                    @error('brand_image')
                                        <div class="alert alert-danger" style="background-color: #ff0000; color: #fff;" role="alert">{{ $message }}</div>
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
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{ isset($editBrand) ? 'Update' : 'Submit' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-button').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const id = this.dataset.id;

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form-${id}`).submit();
                    }
                });
            });
        });
    });
</script>
