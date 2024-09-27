@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
        <div class="row">
        <div class="card">
            <div class="card-body">

            <h6 class="card-title">Edit Country</h6>

            <form class="forms-sample"  method="POST" action="{{ route('update.country') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ $countries->id }}" autocomplete="off">

                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Country Name</label>
                    <input type="text" name="country_name" class="form-control @error('country_name') is-invalid @enderror" value="{{ $countries->country_name }}" autocomplete="off">
                    @error('country_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="formFile">Country Flag</label>
                    <input class="form-control @error('country_icon') is-invalid @enderror" name="country_icon" type="file">
                    @error('country_icon')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @if($countries->country_icon)
                    <div class="mb-3">
                        <label class="form-label">Current Country Icon</label>
                        <img src="{{ asset('upload/admin_images/' . $countries->country_icon) }}" alt="Current Country Icon" width="100">
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