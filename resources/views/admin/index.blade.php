@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
  <div
    class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
  >
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
      <div
        class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0"
        id="dashboardDate"
      >
        <span
          class="input-group-text input-group-addon bg-transparent border-primary"
          data-toggle
          ><i data-feather="calendar" class="text-primary"></i
        ></span>
        <input
          type="text"
          class="form-control bg-transparent border-primary"
          placeholder="Select date"
          data-input
        />
      </div>
      <button
        type="button"
        class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0"
      >
        <i class="btn-icon-prepend" data-feather="printer"></i>
        Print
      </button>
      <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="btn-icon-prepend" data-feather="download-cloud"></i>
        Download Report
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Total Users</h6>
              <div class="dropdown mb-2">
                <a
                  type="button"
                  id="dropdownMenuButton"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i
                    class="icon-lg text-muted pb-3px"
                    data-feather="more-horizontal"
                  ></i>
                </a>
                <div
                  class="dropdown-menu"
                  aria-labelledby="dropdownMenuButton"
                >
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i data-feather="eye" class="icon-sm me-2"></i>
                    <span class="">View</span></a
                  >
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i data-feather="edit-2" class="icon-sm me-2"></i>
                    <span class="">Edit</span></a
                  >
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i data-feather="trash" class="icon-sm me-2"></i>
                    <span class="">Delete</span></a
                  >
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i data-feather="printer" class="icon-sm me-2"></i>
                    <span class="">Print</span></a
                  >
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:;"
                    ><i data-feather="download" class="icon-sm me-2"></i>
                    <span class="">Download</span></a
                  >
                </div>
              </div>
            </div>
            <div class="row">
              @php
                $totalCount = App\Models\User::count();
                $usersRegisteredTodayCount = App\Models\User::whereDate('created_at', today())->count();
                $baselineUserCount = $totalCount - $usersRegisteredTodayCount;
                $userCount = $totalCount;
                $percentageChange = (($userCount - $baselineUserCount) / $baselineUserCount) * 100;
              @endphp
              <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">{{ $userCount }}</h3>
                <p>Total Users</p>
                <div class="d-flex align-items-baseline">
                  <p class="text-success">
                    <span>{{ number_format($percentageChange, 1) }}%</span>
                    @if($percentageChange > 0)
                      <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    @elseif($percentageChange < 0)
                      <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                    @endif
                  </p>
                </div>
              </div>
              <div class="col-6 col-md-12 col-xl-7">
                <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Video</h6>
                <div class="dropdown mb-2">
                  <a
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i
                      class="icon-lg text-muted pb-3px"
                      data-feather="more-horizontal"
                    ></i>
                  </a>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="eye" class="icon-sm me-2"></i>
                      <span class="">View</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="edit-2" class="icon-sm me-2"></i>
                      <span class="">Edit</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="trash" class="icon-sm me-2"></i>
                      <span class="">Delete</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="printer" class="icon-sm me-2"></i>
                      <span class="">Print</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="download" class="icon-sm me-2"></i>
                      <span class="">Download</span></a
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                @php
                  $userCount = App\Models\Video::count();
                @endphp
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">{{ $userCount }}</h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-danger">
                      <span>-2.8%</span>
                      <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                    </p>
                  </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                  <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Images</h6>
                <div class="dropdown mb-2">
                  <a
                    type="button"
                    id="dropdownMenuButton2"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i
                      class="icon-lg text-muted pb-3px"
                      data-feather="more-horizontal"
                    ></i>
                  </a>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton2"
                  >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="eye" class="icon-sm me-2"></i>
                      <span class="">View</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="edit-2" class="icon-sm me-2"></i>
                      <span class="">Edit</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="trash" class="icon-sm me-2"></i>
                      <span class="">Delete</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="printer" class="icon-sm me-2"></i>
                      <span class="">Print</span></a
                    >
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="javascript:;"
                      ><i data-feather="download" class="icon-sm me-2"></i>
                      <span class="">Download</span></a
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                @php
                  $userCount = App\Models\Image::count();
                @endphp
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">{{ $userCount }}</h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>+2.8%</span>
                      <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                  </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                  <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row -->

  <div class="row">
    <div class="col-lg-12 col-xl-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Registered User</h6>
            <div class="dropdown mb-2">
              <a
                type="button"
                id="dropdownMenuButton7"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i
                  class="icon-lg text-muted pb-3px"
                  data-feather="more-horizontal"
                ></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="javascript:;"
                  ><i data-feather="eye" class="icon-sm me-2"></i>
                  <span class="">View</span></a
                >
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="javascript:;"
                  ><i data-feather="edit-2" class="icon-sm me-2"></i>
                  <span class="">Edit</span></a
                >
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="javascript:;"
                  ><i data-feather="trash" class="icon-sm me-2"></i>
                  <span class="">Delete</span></a
                >
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="javascript:;"
                  ><i data-feather="printer" class="icon-sm me-2"></i>
                  <span class="">Print</span></a
                >
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="javascript:;"
                  ><i data-feather="download" class="icon-sm me-2"></i>
                  <span class="">Download</span></a
                >
              </div>
            </div>
          </div>
          <div class="table-responsive">
            @php
                $users = App\Models\User::all();
            @endphp
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th class="pt-0">S.NO</th>
                        <th class="pt-0">Name</th>
                        <th class="pt-0">Country</th>
                        <th class="pt-0">Email</th>
                        <th class="pt-0">Role</th>
                        <th class="pt-0">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->email }}</td>
                        <td><span class="badge bg-{{ $user->role === 'admin' ? 'primary' : 'success' }}">{{ ucfirst($user->role) }}</span></td>
                        <td><span class="badge bg-{{ $user->status === 'active' ? 'success' : 'danger' }}">{{ ucfirst($user->status) }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row -->
</div>

@endsection