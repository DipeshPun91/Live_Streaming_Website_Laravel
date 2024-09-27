@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

  <div class="row profile-body">
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-6 middle-wrapper">
      <div class="row">
      <div class="card">
        <div class="card-body">

            <h6 class="card-title">Add Games</h6>

            <form class="forms-sample" method="POST" action="{{ route('create.game') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputGameName" class="form-label">Game Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" autocomplete="off">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputGameImage">Game Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Add Game</button>
            </form>
        </div>
      </div>
      </div>
    </div>
    <!-- middle wrapper end -->
  </div>
</div>
@endsection