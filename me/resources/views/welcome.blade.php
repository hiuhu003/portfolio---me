@php
    $manifestPath = public_path('build/manifest.json');
    echo "Manifest exists: " . (file_exists($manifestPath) ? 'YES' : 'NO') . "<br>";
    echo "Looking at: " . $manifestPath . "<br>";
    if (file_exists(public_path('build'))) {
        echo "Build directory contents: <br>";
        print_r(scandir(public_path('build')));
    }
@endphp

@vite(['resources/css/app.css', 'resources/js/app.js'])