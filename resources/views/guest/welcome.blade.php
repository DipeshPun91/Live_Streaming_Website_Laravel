<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FumOlympic - Streaming website</title>

    @vite(['resources/css/styles.css'])
    @vite(['resources/js/scripts.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <style>   
      .hero {
          background: url("../images/background.jpg") no-repeat;
          background-size: cover;
          background-position: top center;
          margin-top: 90px;
          padding: var(--section-padding) 0;
          height: 100vh;
          max-height: 1000px;
          display: flex;
          justify-content: center;
          align-items: center;
          text-align: center;
      }
      
      .section-wrapper {
          background: url("{{ asset('./images/section-wrapper-bg.jpg') }}") no-repeat;
          background-size: cover;
          background-position: center;
      }

      .about {
          background: url("{{ asset('images/about-img-shadow.png') }}") no-repeat;
          background-size: 100%;
          background-position: center;
          padding: 120px 0 var(--section-padding);
      }
      
      .gears-card .card-banner {
          position: relative;
          background: url("{{ asset('images/gears-card-bg.png') }}") no-repeat;
          background-size: contain;
          background-position: center;
          width: 100%;
          aspect-ratio: 2 / 1.7;
          display: grid;
          place-items: center;
          margin-bottom: 30px;
      }

      .newsletter-card {
          background: url("{{ asset('images/newsletter-bg.jpg') }}") no-repeat;
          background-size: cover;
          background-position: center;
          padding: 50px 25px;
          border-radius: 12px;
          text-align: center;
      }

      .footer-top {
          background: url("{{ asset('images/footer-bg.jpg') }}") no-repeat;
          background-size: cover;
          background-position: center;
          padding: var(--section-padding) 0;
      }
    </style>
  </head>

  <body id="top">
    <!-- Header Section -->
    <header class="header">
      <div class="overlay" data-overlay></div>

      <div class="container">
        <a href="#" class="logo">
          <img src="{{ asset('images/logo.jpg') }}" alt="FumOlympic logo" />
        </a>

        <button class="nav-open-btn" data-nav-open-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-nav>
          <div class="navbar-top">
            <a href="#" class="logo">
              <img src="{{ asset('images/logo.jpg') }}" alt="FumOlympic logo" />
            </a>

            <button class="nav-close-btn" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>

          <ul class="navbar-list">
            <li>
              <a href="about.html" class="navbar-link">About</a>
            </li>

            <li>
              <a href="{{ route('sports') }}" class="navbar-link">Sports</a>
            </li>

            <li>
              <a href="{{ route('teams') }}" class="navbar-link">Team</a>
            </li>

            <li>
              <a href="{{ route('results') }}" class="navbar-link">Achievement</a>
            </li>
          </ul>

          <ul class="nav-social-list">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </nav>

        <div class="header-actions">
            <button class="search">
                <ion-icon name="search-outline"></ion-icon>
            </button>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/user/dashboard') }}" class="btn-sign_in">
                        <div class="icon-box">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </div>
                        <span>Dashboard</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-sign_in">
                        <div class="icon-box">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </div>
                        <span>Log in</span>
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-sign_in">
                            <div class="icon-box">
                                <ion-icon name="log-in-outline"></ion-icon>
                            </div>
                            <span>Register</span>
                        </a>
                    @endif
                @endauth
            @endif
        </div>
      </div>
    </header>

    <main>
      <article>
        <!-- Hero Section -->
        <section class="hero" id="hero">
          <div class="container">
            <h1 class="h1 hero-title">FunOlympic Games 2024</h1>
            <p class="btn btn-link">
              Experience the thrill of the most anticipated global event of the
              year. Join us as we celebrate sportsmanship, camaraderie, and
              excellence in the heart of Payris. Get ready for an unforgettable
              journey filled with excitement and memorable moments!
            </p>
            <div class="btn-group">
              <button class="btn btn-primary">
                <span>Watch live</span>

                <ion-icon name="play-circle"></ion-icon>
              </button>

              <button class="btn btn-link">Get Started</button>
            </div>
          </div>
        </section>

        <div class="section-wrapper">
          <section class="team" id="team">
            <div class="container">
              <h2 class="h2 section-title">Our Patner</h2>

              <ul class="team-list">
                <li>
                  <img
                    src="{{ asset('images/partner.jpg') }}"
                    alt="Team member image"
                  />
                </li>

                <li>
                  <img
                    src="{{ asset('images/partner1.jpg') }}"
                    alt="Team member image"
                  />
                </li>

                <li>
                  <img
                    src="{{ asset('images/partner2.jpg') }}"
                    alt="Team member image"
                  />
                </li>

                <li>
                  <img
                    src="{{ asset('images/partner3.jpg') }}"
                    alt="Team member image"
                  />
                </li>
              </ul>

              <button class="btn btn-primary">Our Collaborators</button>
            </div>
          </section>

          <!-- News Section -->
          <section class="gears" id="gears">
          <div class="container">
              <h2 class="h2 section-title">News Article</h2>
              @php
                  use App\Models\News;
                  $news = News::all();
              @endphp
              <ul class="gears-list">
                  @foreach($news as $article)
                  <li>
                      <a href="{{ route('news.detail', $article->id) }}">
                          <div class="gears-card">
                              <div class="card-banner">
                                  <img src="{{ (!empty($article->image)) ? url('upload/admin_images/'.$article->image) : url('upload/no_image.jpg') }}" alt="{{ $article->title }}">
                                  <div class="card-time-wrapper">
                                      <ion-icon name="time-outline"></ion-icon>
                                      <span>{{ $article->created_at->format('F d') }}</span>
                                  </div>
                              </div>
                              <div class="card-content">
                                  <div class="card-title-wrapper">
                                      <h3 class="h3 card-title">{{ $article->title }}</h3>
                                      <p class="card-subtitle">{{ $article->description }}</p>
                                  </div>
                              </div>
                              <div class="card-actions">
                                  <button class="btn btn-primary">
                                      <span>Read More</span>
                                  </button>
                                  <button class="btn card-btn">
                                      <ion-icon name="heart-outline"></ion-icon>
                                  </button>
                              </div>
                          </div>
                      </a>
                  </li>
                  @endforeach
              </ul>
          </div>
      </section>

          <!-- Gallery Section -->
          <section class="gallery">
              <div class="container">
                  <h2 class="h2 section-title">Image Gallery</h2>
                  <div class="gallery-list has-scrollbar">
                    @php
                      use App\Models\Image;
                      $images = Image::all();
                    @endphp
                      @foreach($images as $image)
                          <div class="gallery-item">
                              <img src="{{ (!empty($image->image)) ? url('upload/admin_images/'.$image->image) : url('upload/no_image.jpg') }}" alt="{{ $image->title }}">
                          </div>
                      @endforeach
                  </div>
              </div>
          </section>

          <!-- Highlights Section -->
          <section class="gears" id="gears">
            <div class="container">
              <h2 class="h2 section-title">Highlights Video</h2>

              <ul class="gears-list">
                <li>
                  <a href="#">
                    <div class="gears-card">
                      <div class="card-banner">
                        <img
                          src="{{ asset('images/gears-img-1.png') }}"
                          alt="Headphone"
                        />
                        <button class="share">
                          <img src="{{ asset('images/play.png') }}" alt="" />
                        </button>
                        <div class="card-time-wrapper">
                          <ion-icon name="time-outline"></ion-icon>

                          <span>In 4 days</span>
                        </div>
                      </div>
                      <div class="card-content">
                        <div class="card-title-wrapper">
                          <h3 class="h3 card-title">Title</h3>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="gears-card">
                      <div class="card-banner">
                        <img
                          src="{{ asset('images/gears-img-1.png') }}"
                          alt="Headphone"
                        />
                        <button class="share">
                          <img src="{{ asset('images/play.png') }}" alt="" />
                        </button>
                        <div class="card-time-wrapper">
                          <ion-icon name="time-outline"></ion-icon>

                          <span>In 4 days</span>
                        </div>
                      </div>
                      <div class="card-content">
                        <div class="card-title-wrapper">
                          <h3 class="h3 card-title">Title</h3>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="gears-card">
                      <div class="card-banner">
                        <img
                          src="{{ asset('images/gears-img-1.png') }}"
                          alt="Headphone"
                        />
                        <button class="share">
                          <img src="{{ asset('images/play.png') }}" alt="" />
                        </button>
                        <div class="card-time-wrapper">
                          <ion-icon name="time-outline"></ion-icon>

                          <span>In 4 days</span>
                        </div>
                      </div>
                      <div class="card-content">
                        <div class="card-title-wrapper">
                          <h3 class="h3 card-title">Title</h3>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </section>

          <!-- Newsletter Section -->
          <section class="newsletter">
            <div class="container">
              <div class="newsletter-card">
                <div class="newsletter-content">
                  <figure class="newsletter-img">
                    <img
                      src="{{ asset('images/newsletter-img.png') }}"
                      alt="Newsletter image"
                    />
                  </figure>

                  <h2 class="h2 newsletter-title">
                    Be a part of the next big thing
                  </h2>
                </div>

                <form action="" class="newsletter-form">
                  <input
                    type="email"
                    name="email"
                    required
                    placeholder="Are you ready?"
                    class="input-field"
                  />

                  <button type="submit" class="btn btn-secondary">
                    Get Started
                  </button>
                </form>
              </div>
            </div>
          </section>
        </div>
      </article> 
    </main>

    <!-- 
    - #FOOTER
  -->

    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="footer-brand-wrapper">
            <a href="#" class="logo">
              <img src="{{ asset('images/logo.jpg') }}" alt="FunOlympic logo" />
            </a>

            <div class="footer-menu-wrapper">
              <ul class="footer-menu-list">
                <li>
                  <a href="#hero" class="footer-menu-link">Home</a>
                </li>

                <li>
                  <a href="#about" class="footer-menu-link">About</a>
                </li>

                <li>
                  <a href="#tournament" class="footer-menu-link">Tournament</a>
                </li>

                <li>
                  <a href="#team" class="footer-menu-link">Team</a>
                </li>

                <li>
                  <a href="#gears" class="footer-menu-link">Gears</a>
                </li>

                <li>
                  <a href="#" class="footer-menu-link">Contact</a>
                </li>
              </ul>

              <div class="footer-input-wrapper">
                <input
                  type="text"
                  name="message"
                  required
                  placeholder="Find Here Now"
                  class="footer-input"
                />

                <button class="btn btn-primary">
                  <ion-icon name="search-outline"></ion-icon>
                </button>
              </div>
            </div>
          </div>

          <div class="footer-quicklinks">
            <ul class="quicklink-list">
              <li>
                <a href="#" class="quicklink-item">Faq</a>
              </li>

              <li>
                <a href="#" class="quicklink-item">Help center</a>
              </li>

              <li>
                <a href="#" class="quicklink-item">Terms of use</a>
              </li>

              <li>
                <a href="#" class="quicklink-item">Privacy</a>
              </li>
            </ul>

            <ul class="footer-social-list">
              <li>
                <a href="#" class="footer-social-link">
                  <ion-icon name="logo-discord"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="footer-social-link">
                  <ion-icon name="logo-twitch"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="footer-social-link">
                  <ion-icon name="logo-xbox"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="footer-social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            Copyright &copy; 2024 <a href="#">FunOlympic Games 2024</a>. All
            Rights reserved
          </p>
        </div>
      </div>
    </footer>

    <!-- 
    - #GO TO TOP
  -->

    <a href="#top" class="btn btn-primary go-top" data-go-top>
      <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    <!-- 
    - custom js link
  -->
    <script src="./assets/js/scripts.js"></script>

    <!-- 
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
