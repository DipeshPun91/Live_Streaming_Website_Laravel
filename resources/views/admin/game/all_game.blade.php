@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
        <a href="{{ route('add.game') }}" class="btn btn-inverse-info">Add Games</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Games Table</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Game</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($games as $key => $game)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $game->name }}</td>
                                <td>{{ $game->image }}</td>
                                <td>
                                    <a href="{{ route('edit.game', $game->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.game', $game->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
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