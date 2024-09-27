@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-12 middle-wrapper">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Schedule</h6>

                    <form class="forms-sample" method="POST" action="{{ route('create.schedule') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputTeam" class="form-label">Team A</label>
                                    <select name="team_a" class="form-select @error('team_a') is-invalid @enderror">
                                        <option value="">Select Team</option>
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->country_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team_a')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputTeam" class="form-label">Team B</label>
                                    <select name="team_b" class="form-select @error('team_b') is-invalid @enderror">
                                        <option value="">Select Team</option>
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->country_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team_b')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputDate" class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror">
                                    @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputTime" class="form-label">Time</label>
                                    <input type="time" name="time" class="form-control @error('time') is-invalid @enderror">
                                    @error('time')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputGame" class="form-label">Game</label>
                                    <select name="game_id" class="form-select @error('game_id') is-invalid @enderror">
                                        <option value="">Select Game</option>
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

                        <button type="submit" class="btn btn-primary me-2">Create Schedule</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- middle wrapper end -->
    </div>
</div>
@endsection
