<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RSHP - Halaman Layanan</title>
    <link rel="stylesheet"  href="../style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Halaman</h1>
        <nav>
            <li><a href="{{ route('site.home') }}">Home</a></li> |
            <li><a href="{{ route('site.layanan') }}">Layanan</a></li> |
            <li><a href="{{ route('site.kontak') }}">Kontak</a></li> |
            <li><a href="{{ route('site.strukturOrganisasi') }}">Struktur Organisasi</a></li> |
            <li><a href="{{ route('site.login') }}">Login</a></li>
        </nav>
    </header>

    <main>
        <h2>Konten Halaman</h2>
        <p>Ini adalah isi dari halaman</p>
    </main>
</body>
</html>