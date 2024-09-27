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

                        <form class="forms-sample" method="POST" action="{{ route('update.video') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ $video->id }}" autocomplete="off">

                            <div class="mb-3">
                                <label for="exampleInputVideoTitle" class="form-label">Video Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $video->title }}" autocomplete="off">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputVideoFile">Video File</label>
                                <input class="form-control @error('video') is-invalid @enderror" name="video" type="file">
                                @error('video')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputGameSelect">Select Game</label>
                                <select class="form-select @error('game_id') is-invalid @enderror" name="game_id">
                                    <option value="">Select Game</option>
                                    @foreach($games as $game)
                                        <option value="{{ $game->id }}" @if($game->id == $video->game_id) selected @endif>{{ $game->name }}</option>
                                    @endforeach
                                </select>
                                @error('game_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputVideoDescription">Video Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ $video->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Additional Fields for Game -->
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
                            <!-- End of Additional Fields for Game -->

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