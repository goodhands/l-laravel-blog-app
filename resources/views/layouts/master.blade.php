<!doctype html>
<html lang="en">
  @include('layouts.head')

  <body>

    <div class="container">
      @include('layouts.nav')
    </div>

    <main role="main" class="container">
      <div class="row">
        
          @yield('content')

        @include('layouts.sidebar')
      </div><!-- /.row -->
    </main><!-- /.container -->

      @include('layouts.footer')
    </div>
  </body>
</html>
