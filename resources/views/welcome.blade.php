<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Capability Test</title>

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
      <div class="jumbotron">
       <h1 class="display-3">Capability Test</h1>
      </div>
      <div class="container">
        

        <div class="row">
          @foreach ($locations as $location)
              <div class="col-6 location" data-timezone="{{ $location->timezone }}" data-lat="{{ $location->lat }}" data-long="{{ $location->long }}"><h1>{{ $location->label }}</h1><p class="time">&nbsp;</p><p class="countdown">&nbsp;</p></div>
          @endforeach
        </div>


      </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
