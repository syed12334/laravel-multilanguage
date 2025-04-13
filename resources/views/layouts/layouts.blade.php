@php
    $locale = app()->getLocale();
    $routename = "";

    if(Route::currentRouteName() === "index") {
      
    }else {
      $routename .=Route::currentRouteName();
    }
    exit;
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Home')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about', ['locale' => $locale]) }}">{{ __('nav.about') }}</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact', ['locale' => $locale]) }}">{{ __('nav.contact') }}</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route($routename, ['locale' => 'en']) }}">Eng</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route($routename, ['locale' => 'ar']) }}">Ar</a>

            </li>
          </ul>
        </div>
      </nav>
    @yield('content');


</body>
</html>
