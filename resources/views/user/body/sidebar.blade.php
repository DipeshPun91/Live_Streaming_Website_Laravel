<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand"> FunOlympic<span>Game</span> </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
          <i class="link-icon" data-feather="home"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">web apps</li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#emails"
          role="button"
          aria-expanded="false"
          aria-controls="emails"
        >
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="pages/email/read.html" class="nav-link">Read</a>
            </li>
            <li class="nav-item">
              <a href="pages/email/compose.html" class="nav-link">Compose</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a href="pages/apps/chat.html" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Chat</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/apps/calendar.html" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>
      <li class="nav-item nav-category">Content</li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#advancedUI"
          role="button"
          aria-expanded="false"
          aria-controls="advancedUI"
        >
          <i class="link-icon" data-feather="file-text"></i>
          <span class="link-title">Sports</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="advancedUI">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('sports') }}" class="nav-link"
                >View Sports</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#forms"
          role="button"
          aria-expanded="false"
          aria-controls="forms"
        >
          <i class="link-icon" data-feather="video"></i>
          <span class="link-title">Team</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="forms">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('teams') }}" class="nav-link"
                >View Team</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#charts"
          role="button"
          aria-expanded="false"
          aria-controls="charts"
        >
          <i class="link-icon" data-feather="image"></i>
          <span class="link-title">Photo</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.picture') }}" class="nav-link">View Photo</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#tables"
          role="button"
          aria-expanded="false"
          aria-controls="tables"
        >
          <i class="link-icon" data-feather="video"></i>
          <span class="link-title">Video</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.videos') }}" class="nav-link"
                >View Video</a
              >
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#reward"
          role="button"
          aria-expanded="false"
          aria-controls="reward"
        >
          <i class="link-icon" data-feather="award"></i>
          <span class="link-title">Achievement</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="reward">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('results') }}" class="nav-link"
                >View Result</a
              >
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- partial -->
