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
          <span class="link-title">News</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="advancedUI">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.news') }}" class="nav-link"
                >Add News</a
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
          <span class="link-title">Video</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="forms">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.video') }}" class="nav-link"
                >Add Video</a
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
              <a href="{{ route('all.image') }}" class="nav-link">Add Photo</a>
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
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Player</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.player') }}" class="nav-link"
                >Add Player</a
              >
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#icons"
          role="button"
          aria-expanded="false"
          aria-controls="icons"
        >
          <i class="link-icon" data-feather="server"></i>
          <span class="link-title">Schedule</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.schedule') }}" class="nav-link"
                >Add Schedule</a
              >
            </li>
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
              <a href="{{ route('all.result') }}" class="nav-link"
                >Add Result</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Pages</li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#general-pages"
          role="button"
          aria-expanded="false"
          aria-controls="general-pages"
        >
          <i class="link-icon" data-feather="globe"></i>
          <span class="link-title">Country</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.country') }}" class="nav-link"
                >Add Country</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-bs-toggle="collapse"
          href="#authPages"
          role="button"
          aria-expanded="false"
          aria-controls="authPages"
        >
          <i class="link-icon" data-feather="aperture"></i>
          <span class="link-title">Games</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="authPages">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.game') }}" class="nav-link">
                Add Games
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- partial -->
