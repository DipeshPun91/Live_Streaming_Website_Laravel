@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
        <a href="{{ route('add.image') }}" class="btn btn-inverse-info">Add Image</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Images Table</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $key => $image)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $image->title }}</td>
                                <td>{{ $image->image }}</td>
                                <td>
                                    <a href="{{ route('edit.image', $image->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.image', $image->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
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