
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>{{config('app.name','Ladha Africa')}}</title>
</head>
<body>
  <div class="main">
    <div class="outer">
      <div class="inner">
      @include('mainLayout.nav')
        <div class="inner-main">
                  @yield('section')
        </div>
      @include('mainLayout.footer')
      </div>
    </div>
  </div>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>
