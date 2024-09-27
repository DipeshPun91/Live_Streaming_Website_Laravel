@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
        <a href="{{ route('add.video') }}" class="btn btn-inverse-info">Add Video</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Video Table</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Video Title</th>
                        <th>File</th>
                        <th>Description</th>
                        <th>Game</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $key => $video)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $video->title }}</td>
                                <td>{{ $video->video }}</td>
                                <td>{{ $video->description }}</td>
                                <td>{{ $video->game_id }}</td>
                                <td>
                                    <a href="{{ route('edit.video', $video->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.video', $video->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
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