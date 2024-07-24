<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Acceuil</title>
</head>

<body class='m-4 mt-10'>
    <h1>Details de la categorie {{ $category->name }}</h1>
    <div>
        <h1>Les services recents</h1>
        <div class="grid grid-cols-5 gap-4 mt-4">
            @foreach ($services as $service)
                <div>
                    <img src="https://via.placeholder.com/150" alt="">
                    <div class=''>
                        <h2>{{ $service->name }}</h2> <span class='font-medium'> Artisanat</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
