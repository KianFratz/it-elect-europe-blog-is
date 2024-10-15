<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paris - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Paris</a>
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
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/p1.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Paris</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History</h2>
            <p class="mt-4">
                Paris, the capital of France, has a history that stretches back over 2,000 years. Founded by the Parisii tribe in the 3rd century BC, the city later became a significant center under Roman rule. Throughout the Middle Ages, it developed into a political, cultural, and religious hub. Paris is known for its role in the French Revolution, and in the 19th century, it was transformed into the modern city we know today through Haussmann's extensive renovations. The city has been a center for art, fashion, and intellectual thought for centuries.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/p2.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/p3.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Culture</h2>
            <p class="mt-4">
                Paris is synonymous with culture, from its world-renowned museums like the Louvre and the Musée d'Orsay to its vibrant fashion scene and culinary traditions. The city is home to iconic landmarks such as the Eiffel Tower, Notre-Dame Cathedral, and Montmartre, each telling a story of its artistic heritage. Parisians take pride in their cuisine, with cafes and bistros serving everything from croissants to escargots. Paris is also known for its literary history, with famous writers like Victor Hugo and Ernest Hemingway finding inspiration in its streets.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/p4.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/p5.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About</h2>
            <p class="mt-4">
                Paris, often referred to as the "City of Light," is a global center for art, fashion, gastronomy, and culture. With a population of over 2 million people, it is one of Europe's most visited cities. Its charm lies in its blend of modernity and tradition, from the chic boutiques of the Champs-Élysées to the historic charm of the Marais district. Paris is a city where every corner is filled with history, beauty, and a sense of romance, making it a beloved destination for people around the world.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/p6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/p7.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <div class="d-flex justify-content-center flex-wrap">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Paris Tourism. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
