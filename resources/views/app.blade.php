<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Unsigned Africa</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  </head>

  <body>
    

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block sidebar pt-4" id="ap">
          

          <ul class="nav nav-pills flex-column music">
            <p class="nav-link pb-0 m-0">MUSIC</p>
            <li class="nav-item homelink">
              <a class="nav-link active" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-music" aria-hidden="true"></i> Songs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-list" aria-hidden="true"></i> Albums</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-smile-o" aria-hidden="true"></i> Artists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Liked</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <playlist></playlist>
          </ul>
          <div class="pt-1 pb-1 pr-2 pl-2">
              <img src="/img/davido.jpg" class="img-fluid rounded">
          </div>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10">

            <div id="app">
                   
            </div>
        </main>
      </div>
    </div>
        


         <script>
           window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
          </script>
        <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
