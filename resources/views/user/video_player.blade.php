@extends('user.user_dashboard')
@section('user')
<div class="page-content">
  <div class="left-side">
    <div class="video-container">
      <div class="video-player">
        <video controls>
          <source
            src="{{ asset('upload/admin_videos/EP.41.v0.1710392103.1080p.mp4') }}"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="video-info">
        <h2>VIDEO TITLE</h2>
        <p>TIME</p>
      </div>
      <div class="video-user">
        <img src="{{ asset('images/profileimage.png') }}" alt="Profile Image" />
        <h1>Admin</h1>
      </div>
    </div>

    <div class="video-comment">
      <h1>Comment</h1>
      <div class="comment">
        <div class="comment-profile">
          <img src="{{ asset('images/profileimage.png') }}" alt="Profile Image" />
          <h1>User</h1>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
          nemo?
        </p>
      </div>
      <br />
      <div class="comment">
        <div class="comment-profile">
          <img src="{{ asset('images/profileimage.png') }}" alt="Profile Image" />
          <h1>User</h1>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
          nemo?
        </p>
      </div>
      <br />
      <div class="comment">
        <div class="comment-profile">
          <img src="{{ asset('images/profileimage.png') }}" alt="Profile Image" />
          <h1>User</h1>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
          nemo?
        </p>
      </div>
      <br />
    </div>
  </div>
  <div class="right-side">
    <div class="related-video">
      <div class="video">
        <video controls>
          <source
            src="{{ asset('upload/admin_videos/EP.41.v0.1710392103.1080p.mp4') }}"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="video">
        <video controls>
          <source
            src="{{ asset('upload/admin_videos/EP.41.v0.1710392103.1080p.mp4') }}"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="video">
        <video controls>
          <source
            src="{{ asset('upload/admin_videos/EP.41.v0.1710392103.1080p.mp4') }}"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="video">
        <video controls>
          <source
            src="{{ asset('upload/admin_videos/EP.41.v0.1710392103.1080p.mp4') }}"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
</div>

@endsection