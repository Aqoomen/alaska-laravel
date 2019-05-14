<!DOCTYPE html>
<html>
<head>

    <title>Admin</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />

    <link rel="stylesheet" type="text/css" href="/css/admin.css">

</head>

<body id="admin">

<!-- - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- Content -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - -->
<main  id="app" class="">
    <header class="header-admin">
        <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-2">
                      <div class="logo">
                          <a href="/admin">
                              Alaska
                          </a>
                      </div>
                  </div>
              </div>
        </div>
    </header>

    <section class="page-start">
        @yield('content')
    </section>



    <footer class="footer-admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">

                </div>
            </div>
        </div>
    </footer>
</main>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- Scripts -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - -->
<script src="/js/admin.js"></script>

</body>
