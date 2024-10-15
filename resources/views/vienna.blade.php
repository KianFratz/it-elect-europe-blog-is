<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vienna - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Vienna</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#culture">Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class ="nav-link" href="{{ route('main.index') }}">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/v1.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Vienna</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History of Vienna</h2>
            <p class="mt-4">
                Vienna, the capital of Austria, has a rich and fascinating history that dates back to Roman times. It was once the center of the Habsburg Empire, and its stunning architecture reflects centuries of imperial power. The city has been a melting pot of cultures, art, and music, producing legendary figures such as Mozart, Beethoven, and Strauss. Vienna played a significant role in European history, especially during the 19th century, when it was a hub for diplomacy and politics.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/v2.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/v3.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Rich Culture of Vienna</h2>
            <p class="mt-4">
                Vienna is renowned for its cultural heritage and artistic achievements. The city is home to beautiful opera houses, theaters, and museums that showcase a wealth of art, music, and history. Traditional Viennese coffee houses, famous for their unique atmosphere, have become cultural institutions where locals and tourists gather. The annual Vienna Ball season showcases elegant dance and music, while festivals throughout the year celebrate everything from classical music to contemporary arts.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/v4.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/v5.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About Vienna</h2>
            <p class="mt-4">
                Vienna is not just the capital of Austria but also a vibrant cultural hub in Europe. Known for its historical sites, such as the Schönbrunn Palace and St. Stephen's Cathedral, Vienna offers a unique blend of tradition and modernity. The city's beautiful parks, impressive architecture, and rich musical heritage make it a top destination for travelers. With a population of over 1.9 million, Vienna is a city that cherishes its past while embracing the future.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/v6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/v7.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <div class="d-flex justify-content-center flex-wrap">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Vienna Tourism. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
