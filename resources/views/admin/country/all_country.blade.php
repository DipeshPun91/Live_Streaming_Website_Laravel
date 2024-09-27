@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
        <a href="{{ route('add.country') }}" class="btn btn-inverse-info">Add Country</a>
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
                        <th>Contry</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($countries as $key => $country)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $country->country_name }}</td>
                                <td>{{ $country->country_icon }}</td>
                                <td>
                                    <a href="{{ route('edit.country', $country->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{ route('delete.country', $country->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
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