<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Admin </title>
  <link rel="shortcut icon" type="image/png" href="{{asset('img/logo.png') }}" />
  <link rel="stylesheet" href="{{asset('Admin/css/styles.min.css')}}" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('admin.layouts.sidebar')
    <div class="body-wrapper">
      @include('admin.layouts.header')
        <div class="container-fluid">
            <div id="messageBox">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Success!</strong> {{ session('success') }}
                    <button type="button" class="btn btn-close btn-sm" data-dismiss="alert" aria-label="Close">

                    </button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-error alert-dismissible fade show" role="alert">
                    <strong> Error!</strong> {{ session('error') }}
                    <button type="button" class="btn btn-close btn-sm" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    </div>
                @endif

            </div>
            @yield('content')
        </div>
    </div>
  </div>
  <script src="{{asset('Admin/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('Admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Admin/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('Admin/js/app.min.js')}}"></script>
  <script src="{{asset('Admin/libs/simplebar/dist/simplebar.js')}}"></script>
</body>

</html>
