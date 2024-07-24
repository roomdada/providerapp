<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Acceuil</title>
</head>

<body class='m-4 mt-10'>
    <h1>Nos meilleures categories</h1>
    <div class="grid grid-cols-5 gap-4 mt-4">
        @foreach ($categories as $category)
            <div>
             <a href='{{ route('categories.show', $category->slug) }}'>   <img src="https://via.placeholder.com/150" alt=""></a>
                <div class=''>
                    <h2>{{ $category->name }}</h2> <span class='font-medium'> {{ $category->services_count }}
                        services</span>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
    <br>
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
