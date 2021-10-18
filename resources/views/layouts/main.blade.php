<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>HalloQuran - HalloEveryone</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="frontend/css/aos.min.css" rel="stylesheet">
    <link href="frontend/css/swiper.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="frontend/assets/images/favicon.png">
</head>
<body>
    
    <!-- Navigation -->
     @include('partials.navbar')
    <!-- end of navigation -->

    @yield('home')

    <!-- Footer -->
    @include('partials.footer')
    <!-- end of footer -->

    
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="frontend/assets/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    
    <!-- Scripts -->
    <script src="frontend/js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="frontend/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="frontend/js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="frontend/js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="frontend/js/script.js"></script>  <!-- Custom scripts -->
</body>
</html>