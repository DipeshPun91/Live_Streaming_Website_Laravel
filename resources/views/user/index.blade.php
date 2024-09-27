@extends('user.user_dashboard')
@section('user')
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
    </div>
  </div>
  <div class="live-container">
    <h1>Live Videos</h1>
    <div class="live">
      <a href="{{ route('live.video') }}">
        <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
      </a>
    </div>
    <div class="highlight-container">
      <h1>Highlights Videos</h1>
      <div class="highlight">
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-1.jpg') }}" alt="Headphone" />
        </a>
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
        </a>
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-3.jpg') }}" alt="Headphone" />
        </a>
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-4.jpg') }}" alt="Headphone" />
        </a>
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-1.jpg') }}" alt="Headphone" />
        </a>
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
        </a>
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
        </a>
        <a href="{{ route('highlight.video') }}">
          <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
        </a>
      </div>
    </div>
    <div class="picture-container">
      <h1>Images</h1>
      <div class="picture">
        <img src="{{ asset('images/gallery-img-1.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-3.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-4.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-1.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-3.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-4.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-1.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-2.jpg') }}" alt="Headphone" />
        <img src="{{ asset('images/gallery-img-3.jpg') }}" alt="Headphone" />
      </div>
    </div>
  </div>
</div>

@endsection