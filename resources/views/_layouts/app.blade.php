<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

  <!-- Libs CSS -->
  <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/libs/prismjs/themes/prism-okaidia.css') }}" rel="stylesheet">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="bg-light">
  <div id="db-wrapper">
    <!-- navbar vertical -->
    <!-- Sidebar -->
    <x-authSide />
    <!-- page content -->
    <div id="page-content">
      <div class="header @@classList">
        <!-- navbar -->
        <x-authNav />
      </div>
      <!-- Container fluid -->
      <div class="container-fluid px-6 py-4">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4 ">
              <h3 class="mb-0 fw-bold">{{ $name }}</h3>
            </div>
          </div>
        </div>

        <div class="card">
          <!-- card header  -->
          @if (isset($header))
          <div class="card-header bg-white py-4 d-flex justify-content-between">
            <h4 class="mb-0">{{ $header }}</h4>
            @if (isset($link))
            <a href="{{ $link }}" class="btn btn-primary btn-sm">Tambah Data</a>
            @endif
          </div>
          @endif

          {{ $slot }}

        </div>

      </div>

    </div>
  </div>
  <!-- Scripts -->
  <!-- Libs JS -->
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js') }}"></script>
  <script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
  <script src="{{ asset('assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}"></script>




  <!-- Theme JS -->
  <script src="{{ asset('assets/js/theme.min.js') }}"></script>
  <script>
    function autofill() {
      let id = $('#pasien_id').val();
      let url ="{{ url('/dialisis/otomatis') }}"+'/'+ id;
      $.ajax({
        url: url,
        data: {
          _token: $('meta[name="csrf-token"]').attr('content')
        },
        method: 'get',
        dataType: 'json',
          success: function (data) {
            $('#hd').val(data.data);
            console.log(data);
          }
      });
    }

  </script>


</body>

</html>