@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.result') }}" class="btn btn-inverse-info">Add Achievement</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Achievement Table</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Team</th>
                        <th>Player</th>
                        <th>Game</th>
                        <th>Result</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $key => $result)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $result->team->country_name }}</td>
                                <td>{{ $result->player->name }}</td>
                                <td>{{ $result->game->name }}</td>
                                <td>{{ $result->result }}</td>
                                <td>
                                    <a href="{{ route('edit.result', $result->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.result', $result->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
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