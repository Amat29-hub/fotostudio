<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Photo Magic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display:wght@500&family=Work+Sans&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @include('layouts.frontend.navbar')

    @yield('content')

    @include('layouts.frontend.footer')

<style>
    .hero-header img {
        width: 100%;
        height: 600px;   /* tinggi konsisten untuk hero */
        object-fit: cover;
    }

    .about-section img {
        width: 100%;
        height: 400px;   /* tinggi konsisten untuk about */
        object-fit: cover;
        border-radius: 10px; /* opsional, biar sudut agak halus */
    }

    .gallery img {
        width: 100%;
        height: 300px;   /* tinggi konsisten untuk gallery */
        object-fit: cover;
        border-radius: 10px;
    }

    .team-item img,
    .partner img {
        width: 100%;
        height: 350px;   /* tinggi konsisten untuk team & partner */
        object-fit: cover;
    }

    .service img {
        width: 100%;
        height: 250px;   /* tinggi konsisten untuk service */
        object-fit: cover;
    }

    /* warna spinner/loading */
    .custom-spinner {
        color: #008080 !important;
    }

    /* ==== Tambahan untuk page-header ==== */
    .page-header {
        background: url('{{ asset('img/page-header.jpg') }}') no-repeat center center;
        background-size: cover;
        background-attachment: scroll; /* bisa diganti fixed kalau mau efek parallax */
        min-height: 450px; /* tinggi minimal biar proporsional */
        display: flex;
        align-items: center; /* konten di tengah vertikal */
        justify-content: center; /* konten rata tengah horizontal */
    }
</style>

</body>
</html>
