@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
        <div class="row">
        <div class="card">
            <div class="card-body">

            <h6 class="card-title">Edit News</h6>

            <form class="forms-sample"  method="POST" action="{{ route('update.news') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ $news->id }}" autocomplete="off">

                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">News Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $news->title }}" autocomplete="off">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputDescription" class="form-label">News Description</label>
                  <textarea name="description" class="form-control @error('description') is-invalid @enderror" autocomplete="off" rows="5">{{ $news->description }}</textarea>
                  @error('description')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
                <div class="mb-3">
                    <label class="form-label" for="formFile">News Photo</label>
                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @if($news->image)
                    <div class="mb-3">
                        <label class="form-label">Current Country Icon</label>
                        <img src="{{ asset('upload/admin_images/' . $news->image) }}" alt="Current Country Icon" width="100">
                    </div>
                @endif
                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
            </form>

            </div>
        </div>
        </div>
        </div>
        <!-- middle wrapper end -->
    </div>
</div>
@endsection