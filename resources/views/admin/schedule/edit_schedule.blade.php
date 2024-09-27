@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-12 middle-wrapper">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Schedule</h6>

                    <form class="forms-sample" method="POST" action="{{ route('update.schedule') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" class="form-control" value="{{ $schedule->id }}">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputTeam" class="form-label">Team A</label>
                                    <select name="team_a" class="form-select @error('team_a') is-invalid @enderror">
                                        <option value="{{ $schedule->teamA->id }}">{{ $schedule->teamA->country_name }}</option>
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
                                        <option value="{{ $schedule->teamB->id }}">{{ $schedule->teamB->country_name }}</option>
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
                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ $schedule->date }}">
                                    @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputTime" class="form-label">Time</label>
                                    <input type="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ $schedule->time }}">
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
                                        <option value="{{ $schedule->game->id }}">{{ $schedule->game->name }}</option>
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
