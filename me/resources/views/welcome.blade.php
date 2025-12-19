<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    @if(file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="/build/assets/app-BLthNWWj.css">
        <link rel="stylesheet" href="/build/assets/app-DJTf-ORP.css">
        <script type="module" src="/build/assets/app-Cz9ctsU2.js"></script>
    @endif
</head>
<body>
    <div id="app"></div>
</body>
</html>