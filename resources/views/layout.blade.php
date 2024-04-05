<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Shop Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Cairo" , sans-serif;
    }
    html {
        scroll-behavior: smooth;
    }
    body {
        background-color: #f5f5f5;
        height: 100%;
        min-height: 100vh; /* Ensures the page takes up at least the height of the viewport */
        position: relative; /* Required for relative positioning of footer */
    }
    .navbar {
        z-index: 20;
    }
    .footer{
        position: absolute; /* Set the footer to absolute position */
        bottom: 0; /* Stick the footer to the bottom of the page */
        width: 100%; /* Make the footer span the full width of the page */
        height: 60px; /* Set the height of the footer */
        background-color: #333; /* Example background color */
        color: #fff; /* Example text color */
        text-align: center; /* Center align the text within the footer */
    }
    .cont {
      padding-top: 60px;
    }
</style>
<body dir="rtl">
    <nav class="navbar fixed-top shadow mb-4 bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img class="border border-dark rounded-5 mx-1" height="45px" width="45px" src="{{ asset('images') }}/logo.JPG" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b class="fw-bold fs-3 mx-2">متجر كابو</b>
            </a>

            <a class="icon text-dark fw-bold navbar-brand d-flex fs-3" href="#">
                <b class="ms-2">السلة</b>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>
            </a>
        </div>
    </nav>



    @yield('content')    

 
    <footer class="footer">
        <div class="d-flex bg-dark text-white p-3 justify-content-evenly">
            <b class="text-bold">كل الحقوق محفوظة لدينا متجر كابو</b>
            <h5><a style="text-decoration: none !important; color: #fff !important" href="http://wa.me/201272189070" target="_blank" rel="noopener noreferrer">online shop store@ 2024</a></h5>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>