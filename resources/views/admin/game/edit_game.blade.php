@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Edit Game</h6>

                        <form class="forms-sample" method="POST" action="{{ route('update.game') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ $game->id }}" autocomplete="off">

                            <div class="mb-3">
                                <label for="exampleInputGameName" class="form-label">Game Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $game->name }}" autocomplete="off">
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
                            @if($game->image)
                                <div class="mb-3">
                                    <label class="form-label">Current Game Image</label>
                                    <img src="{{ asset('upload/admin_images/' . $game->image) }}" alt="Current Game Image" width="100">
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