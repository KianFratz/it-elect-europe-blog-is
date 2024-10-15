<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cologne - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Cologne</a>
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
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/c1.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Cologne</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History</h2>
            <p class="mt-4">
                Cologne, one of Germany's oldest cities, was founded by the Romans in 50 AD and became a major center for trade and commerce in the Middle Ages. The city's history is marked by its impressive Gothic architecture, including the world-famous Cologne Cathedral, which took over 600 years to complete. Cologne has survived numerous challenges, including extensive damage during World War II, and has been rebuilt to preserve its historical charm while embracing modernity. Today, it is known as a cultural and economic hub in the Rhineland.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/c2.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/c3.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Culture</h2>
            <p class="mt-4">
                Cologne is celebrated for its vibrant cultural scene, which blends ancient traditions with contemporary art and music. The city is famous for its annual Carnival, a colorful festival that fills the streets with parades, costumes, and celebrations. Cologne also boasts a rich beer culture, with 'Kölsch' being the local specialty served in traditional beer halls. The city's art museums, theaters, and music venues, including the Philharmonie, make it a cultural hotspot. Street art, modern galleries, and historical sites coexist, creating a dynamic atmosphere for both locals and visitors.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/c4.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/c5.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About</h2>
            <p class="mt-4">
                Cologne is the fourth-largest city in Germany and a major cultural and economic center in the Rhineland. It is known for its stunning cathedral, the Kölner Dom, a UNESCO World Heritage site that towers over the cityscape. With a population of over 1 million, Cologne is a lively city that combines historical architecture with modern living. Its picturesque Old Town, riverfront promenades along the Rhine, and bustling shopping streets make it a popular destination. Cologne's warm and welcoming atmosphere, along with its rich history, makes it a must-visit city in Europe.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/c6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/c7.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <div class="d-flex justify-content-center flex-wrap">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Cologne Tourism. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
