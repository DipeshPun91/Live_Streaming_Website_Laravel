@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

  <div class="row profile-body">
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-6 middle-wrapper">
      <div class="row">
      <div class="card">
        <div class="card-body">

          <h6 class="card-title">Add Country</h6>

          <form class="forms-sample"  method="POST" action="{{ route('create.country') }}" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                  <label for="exampleInputUsername1" class="form-label">Country Name</label>
                  <input type="text" name="country_name" class="form-control @error('country_name') is-invalid @enderror" autocomplete="off">
                  @error('country_name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                  <label class="form-label" for="formFile">Country Flag</label>
                  <input class="form-control @error('country_icon') is-invalid @enderror" name="country_icon" type="file" >
                  @error('country_icon')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <button type="submit" class="btn btn-primary me-2">Add Country</button>
          </form>

        </div>
      </div>
      </div>
    </div>
    <!-- middle wrapper end -->
  </div>
</div>
@endsection