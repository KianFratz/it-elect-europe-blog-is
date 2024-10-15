<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prague - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Prague</a>
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
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/pr5.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Prague</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History</h2>
            <p class="mt-4">
                Prague, the capital city of the Czech Republic, has a rich history that spans over a thousand years. Known as the "City of a Hundred Spires," it was founded during the Romanesque period and flourished during the Gothic and Renaissance eras. Prague became the political and cultural center of the Holy Roman Empire during the reign of Emperor Charles IV in the 14th century, who established Charles University and commissioned the iconic Charles Bridge. Despite enduring conflicts such as World War II and communist rule, Prague has retained its architectural heritage and remains a symbol of Central European history and resilience.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/pr1.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/pr2.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Culture</h2>
            <p class="mt-4">
                Prague's culture is a blend of tradition and modernity, making it a vibrant hub of art, music, and literature. The city is famous for its classical music heritage, with composers like Antonín Dvořák and Bedřich Smetana having deep connections to Prague. Visitors can experience traditional Czech cuisine, such as 'svíčková' and 'trdelník,' in cozy taverns throughout the city. Prague is also known for its stunning Baroque, Gothic, and Art Nouveau architecture, as seen in the Old Town Square and the Astronomical Clock. The annual Prague Spring International Music Festival attracts musicians and music lovers from around the world, adding to the city's rich cultural scene.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/pr3.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/pr4.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About</h2>
            <p class="mt-4">
                Prague, with its fairy-tale architecture and vibrant atmosphere, is a city that captures the hearts of visitors. Nestled along the Vltava River, it is home to a population of over 1 million people. Its historic center, a UNESCO World Heritage Site, includes stunning landmarks such as Prague Castle, St. Vitus Cathedral, and the picturesque Charles Bridge. The city's charming cobblestone streets, riverside promenades, and vibrant nightlife make it a perfect destination for those seeking both history and modern entertainment. Known as a gateway between East and West Europe, Prague offers a unique cultural experience in every corner.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/pr6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/pr7.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
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
