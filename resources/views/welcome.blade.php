<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Green Heaven</title>

    @vite(['resources/scss/app.scss'])

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    {{-- Navbar --}}
    <x-navbar />

    {{-- Section Home --}}
    <x-hero />

    {{-- Section Support --}}
    <x-support />

    {{-- About --}}
    <x-about />

    {{-- Event Summary --}}
    <x-event />

    {{-- Sponsorship --}}
    <x-sponsorship />

    {{-- Donate --}}
    <x-donate />

    {{-- Footer --}}
    <x-footer />
</body>

</html>
