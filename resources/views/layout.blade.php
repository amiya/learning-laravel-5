<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
        <div>Welcome to Laravel 5</div>
        <div id="content">
            
            @yield('content')
            
        </div>
     </div> 
	<!-- Scripts -->
	<script src="{{ asset('/js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        
    </body>
</html>
