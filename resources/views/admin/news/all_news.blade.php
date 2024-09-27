@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
        <a href="{{ route('add.news') }}" class="btn btn-inverse-info">Add News</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Country Table</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>News Title</th>
                        <th>File</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $key => $news)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->image }}</td>
                                <td>{{ $news->created_at }}</td>
                                <td>
                                    <a href="{{ route('edit.news', $news->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.news', $news->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
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