@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

  <div class="row profile-body">
    <!-- left wrapper start -->
    <div class="col-md-8 col-xl-6 middle-wrapper">
      <div class="row">
      <div class="card">
        <div class="card-body">

            <h6 class="card-title">Add Videos</h6>

            <form id="videoForm" class="forms-sample" method="POST" action="{{ route('create.video') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputVideoTitle" class="form-label">Video Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" autocomplete="off">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputVideoFile">Video File</label>
                    <input class="form-control @error('video') is-invalid @enderror" name="video" type="text">
                    @error('video')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputThumbnailFile">Thumbnail File</label>
                    <input class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" type="file">
                    @error('thumbnail')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputGameSelect">Select Game</label>
                    <select class="form-select @error('game_id') is-invalid @enderror" name="game_id">
                        <option value="">Select Game</option>
                        @foreach($games as $game)
                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                        @endforeach
                    </select>
                    @error('game_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputVideoDescription">Video Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button id="submitBtn" type="submit" class="btn btn-primary me-2">Add Video</button>
            </form>
        </div>
      </div>
      </div>
    </div>
    <!-- left wrapper end -->
</div>
@endsection
