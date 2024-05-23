<!DOCTYPE html>
<html lang="en">
<head>
   @vite(['resources/js/app.js'])
  <title>Literalia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-1"><a href="{{ url('/login') }}">Login</a></div>
            <div class="col-sm-1">Contact</div>
        </div>
        <div class="container p-5 my-5 bg-dark text-white">
            <h1 class="text-center" style="font-weight: bold;">Literalia</h1>
            <p class="text-center">Busque, encuentre, disfrute.</p>
            <h3>La librería de segunda mano por antonomasia.</h3>  
        </div>
        <div class="container p-5 my-5 border">
            <div class="row">
                <div class="col-sm-6">
                    @yield('main_content')    
                </div>
                <div class="col-sm-1">   
                </div>
                <div class="col-sm-4">
                    @yield('secondary_content')
                </div>
            </div> 
        </div>
    </div>
</body>
</html>
