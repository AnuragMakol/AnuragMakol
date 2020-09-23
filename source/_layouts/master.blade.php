<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href='https://fonts.googleapis.com/css?family=Poppins:200,400,500,700,800&display=swap' rel='stylesheet' type='text/css'>                     
        <link rel="stylesheet" href="assets/css/clear.css">
        <link rel="stylesheet" href="assets/css/bootstrap-grid.css">      
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body class="one-page">
        @yield('body')

        <script src="assets/js/jquery.js"></script>       
        <script src="assets/js/imagesloaded.pkgd.js"></script>
        <script src="assets/js/jquery.fitvids.js"></script>
        <script src="assets/js/jarallax.js"></script>
        <script src="assets/js/jarallax-element.min.js"></script>
        <script src="assets/js/isotope.pkgd.js"></script>        
        <script src="assets/js/jquery.prettyPhoto.js"></script>                
        <script src='assets/js/owl.carousel.min.js'></script>                                                            
        <script src="assets/js/main.js"></script>
    </body>
</html>
