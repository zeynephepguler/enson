<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  @include('layouts.header')
  </head>
  <body>
    <center>
            <div >
          @yield('content')
        </div>
        <div >
          @include('layouts.footer')
        </div>
  </body>
</html>
