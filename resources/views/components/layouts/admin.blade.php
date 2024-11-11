<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="admin">
    <header>
        <nav class="flex gap-4 mx-10">
            <a href="/">Admin layout</a>
            <ul class="flex gap-4 mx-10">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    {{ $slot }}
    @livewireScripts
</body>

</html>
