@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Edit Image</h6>

                        <form class="forms-sample" method="POST" action="{{ route('update.image') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" class="form-control" value="{{ $images->id }}">

                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Image Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $images->title }}" autocomplete="off">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formFile">Image</label>
                                <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @if($images->image)
                                <div class="mb-3">
                                    <label class="form-label">Current Image</label>
                                    <img src="{{ asset('upload/admin_images/' . $images->image) }}" alt="Current Image" width="100">
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