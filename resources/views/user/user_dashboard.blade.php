<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="description"
      content="Responsive HTML Admin Dashboard Template based on Bootstrap 5"
    />
    <meta name="author" content="NobleUI" />
    <meta
      name="keywords"
      content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
    />

    <title>User Panel - Streaming Website</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"/>
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('../assets/vendors/core/core.css') }}"/>
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('../assets/vendors/flatpickr/flatpickr.min.css') }}"/>
    <!-- End plugin css for this page -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
	<!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('../assets/fonts/feather-font/css/iconfont.css') }}"/>
  <link rel="stylesheet" href="{{ asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}"/>
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('../assets/css/demo2/style.css') }}"/>
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png') }}"/>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  

  <style>
    .left-side {
        background-color: #010232;
        display: flex;
        flex-direction: column;
        float: left;
        width: 75%;
      }

      .video-player video {
        width: 100%;
      }

      .video-user {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        color: #fff;
        padding: 10px;
      }

      .video-info {
        display: flex;
        flex-direction: column;
        color: #fff;
      }

      .video-user img {
        width: 40px;
        height: auto;
        margin-right: 10px;
      }

      .video-user h1 {
        margin: 0;
      }

      .video-info h2,
      .video-info p {
        margin: 0 10px;
      }

      .video-container {
        margin-bottom: 20px;
      }

      .video-comment {
        margin-bottom: 20px;
        color: #fff;
        padding: 10px;
      }

      .comment-profile {
        display: flex;
        flex-direction: row;
        color: #fff;
      }

      .comment {
        border-bottom: 1px solid aqua;
        padding-bottom: 10px;
      }

      .comment:last-child {
        border-bottom: none;
      }

      .comment img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
      }

      .comment-profile h1 {
        margin: 0;
        font-size: 16px;
        margin-top: 5px;
      }

      .comment p {
        margin: 5px 0;
        font-size: 14px;
        line-height: 1.5;
      }

      .right-side {
        background-color: #010232;
        float: right;
        width: 20%;
        padding: 10px;
      }

      .video {
        margin-bottom: 10px;
      }

      video {
        max-width: 100%;
      }

      .comment-button {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        text-decoration: none;
      }

      .comment-button:hover {
        background-color: #0056b3;
      }

      .comment-button i {
        margin-right: 5px;
      }



  /* User Dashbord */
  .live-container {
    background-color: #010232;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  h1 {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .live {
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 5px;
    margin-left: 130px;
    margin-right: 150px;
  }

  .live img {
    width: 700px;
    height: 300px;
    border-radius: 5px;
  }

  .highlight-container {
    background-color: #010232;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 5px;
    overflow-x: auto;
    white-space: nowrap;
  }

  .highlight {
    margin-bottom: 20px;
    display: flex;
    flex-direction: row;
    padding: 20px;
    border-radius: 5px;
    overflow-x: auto;
    white-space: nowrap;
  }

  .highlight img {
    width: 90%;
    height: auto;
    margin-right: 10px;
    border-radius: 5px;
  }

  .picture-container {
    background-color: #010232;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 5px;
    overflow-x: auto;
    white-space: nowrap;
  }

  .picture {
    margin-bottom: 20px;
    display: flex;
    flex-direction: row;
    padding: 20px;
    border-radius: 5px;
    overflow-x: auto;
    white-space: nowrap;
  }

  .picture img {
    width: 30%;
    height: auto;
    margin-right: 10px;
    border-radius: 5px;
  }

  /* Image List */
  .pictures-container {
      display: flex;
      justify-content: center;
    }

    .pictures-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(300px, 1fr));
      gap: 20px;
    }

    .pictures-grid img {
      width: 100%;
      height: auto;
    }

  /* Video List */
  .highlight-container {
      display: flex;
      justify-content: center;
    }

    .video-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
    }

    .video-grid img {
      width: 100%;
      height: auto;
    }
  </style>
  </head>
  <body>
    <div class="main-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('user.body.sidebar')
      <!-- partial -->
      <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('user.body.header')
        <!-- partial -->

        @yield('user')

        <!-- partial:partials/_footer.html -->
        @include('user.body.footer')
        <!-- partial -->
      </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('../assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('../assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('../assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('../assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('../assets/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('../assets/js/dashboard-dark.js') }}"></script>
    <!-- End custom js for this page -->

    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page -->
    <script src="../../../assets/js/data-table.js"></script>
    <!-- End custom js for this page -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ asset('../assets/js/code.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type','info') }}"
      switch(type){
          case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;

          case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;

          case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;

          case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break; 
      }
      @endif 
    </script>
  </body>
</html>
