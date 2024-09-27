@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
  <div class="row profile-body">
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-6 middle-wrapper">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Edit Achievement</h6>
            <form class="forms-sample" method="POST" action="{{ route('update.result') }}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" class="form-control" value="{{ $result->id }}">
              <div class="mb-3">
                <label for="exampleInputGame" class="form-label">Select Game</label>
                <select name="game_id" class="form-select @error('game_id') is-invalid @enderror">
                  <option value="{{ $result->game->id }}">{{ $result->game->name }}</option>
                  @foreach($games as $game)
                  <option value="{{ $game->id }}">{{ $game->name }}</option>
                  @endforeach
                </select>
                @error('game_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputTeam" class="form-label">Select Team</label>
                <select name="team_id" class="form-select @error('team_id') is-invalid @enderror">
                  <option value="{{ $result->team->id }}">{{ $result->team->country_name }}</option>
                  @foreach($teams as $team)
                  <option value="{{ $team->id }}">{{ $team->country_name }}</option>
                  @endforeach
                </select>
                @error('team_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPlayer" class="form-label">Select Player</label>
                <select name="player_id" class="form-select @error('player_id') is-invalid @enderror">
                  <option value="{{ $result->player->id }}">{{ $result->player->name }}</option>
                  @foreach($players as $player)
                  <option value="{{ $player->id }}">{{ $player->name }}</option>
                  @endforeach
                </select>
                @error('player_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputResult" class="form-label">Result</label>
                <input type="text" name="result" class="form-control @error('result') is-invalid @enderror" value="{{ $result->result }}" autocomplete="off">
                @error('result')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
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