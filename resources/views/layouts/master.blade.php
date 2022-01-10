<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  @include('layouts.header')
  </head>
  <body>
      <div >
        @include('layouts.menu')
      </div><center>

            <div >
          @yield('content')
        </div>
        <div >
          @include('layouts.footer')
        </div>
  </body>
</html>
