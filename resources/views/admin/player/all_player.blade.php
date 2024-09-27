@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.player') }}" class="btn btn-inverse-info">Add Player</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Player Table</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Sport</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Team</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($players as $key => $player)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $player->name }}</td>
                                <td>{{ $player->game->name }}</td>
                                <td>{{ $player->gender }}</td>
                                <td>{{ $player->age }}</td>
                                <td>{{ $player->team->country_name }}</td>
                                <td>
                                    <a href="{{ route('edit.player', $player->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.player', $player->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
                                </td>
                            </tr>
                        @endforeach()
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>

</div>
@endsection