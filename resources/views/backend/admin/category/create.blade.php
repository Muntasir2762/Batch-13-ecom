@extends('backend.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Category Create</h3>
                </div>
                <form action="{{url('/admin/category/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Category Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                      <label for="image">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                          <label class="custom-file-label" for="image">Choose file</label>
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
  
              <!-- general form elements -->
            </div>
        </div>
    </div>
</section>
            
@endsection