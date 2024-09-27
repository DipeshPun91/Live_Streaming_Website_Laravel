@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-12 middle-wrapper">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Player Information</h6>

                    <form class="forms-sample" method="POST" action="{{ route('update.player') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" class="form-control" value="{{ $player->id }}">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $player->name }}" autocomplete="off">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputImage">Image</label>
                                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @if($player->image)
                                        <img src="{{ asset('upload/admin_images/' . $player->image) }}" alt="Player Image" width="100">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputGender" class="form-label">Gender</label>
                                    <select name="gender" class="form-select @error('gender') is-invalid @enderror">
                                        <option value="{{ $player->gender }}">{{ $player->gender }}</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputDateOfBirth" class="form-label">Date of Birth</label>
                                    <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" value="{{ $player->date_of_birth }}">
                                    @error('date_of_birth')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputAge" class="form-label">Age</label>
                                    <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ $player->age }}" min="1">
                                    @error('age')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputWeight" class="form-label">Weight (in kg)</label>
                                    <input type="number" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ $player->weight }}" min="1">
                                    @error('weight')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputHeight" class="form-label">Height (in cm)</label>
                                    <input type="number" name="height" class="form-control @error('height') is-invalid @enderror" value="{{ $player->height }}" min="1">
                                    @error('height')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputGame" class="form-label">Game</label>
                                    <select name="game_id" class="form-select @error('game_id') is-invalid @enderror">
                                        <option value="{{ $player->game->id }}">{{ $player->game->name }}</option>
                                        @foreach($games as $game)
                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('game_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputTeam" class="form-label">Team</label>
                                    <select name="team_id" class="form-select @error('team_id') is-invalid @enderror">
                                        <option value="{{ $player->team->id }}">{{ $player->team->country_name }}</option>
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->country_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Sve Changes</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- middle wrapper end -->
    </div>
</div>
@endsection
