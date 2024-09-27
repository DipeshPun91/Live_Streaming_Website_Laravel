@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.schedule') }}" class="btn btn-inverse-info">Add Schedule</a>
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
                        <th>Team A</th>
                        <th>Team B</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Game</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($schedules as $key => $schedule)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $schedule->teamA->country_name }}</td>
                                <td>{{ $schedule->teamB->country_name }}</td>
                                <td>{{ $schedule->date }}</td>
                                <td>{{ $schedule->time }}</td>
                                <td>{{ $schedule->game->name }}</td>
                                <td>
                                    <a href="{{ route('edit.schedule', $schedule->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.schedule', $schedule->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
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