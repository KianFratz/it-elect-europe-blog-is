
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcelona - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Barcelona</a>
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
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/b1.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Barcelona</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History of Barcelona</h2>
            <p class="mt-4">
                Barcelona, founded as a Roman city, has a rich history that spans over 2,000 years. It has seen transformations from a medieval city with iconic Gothic architecture to a bustling modern metropolis. The city has witnessed the rise of powerful monarchies, experienced the artistic revolution of Modernism, and was significantly shaped by the works of Antoni Gaudí, whose masterpieces like the Sagrada Família and Park Güell define the skyline today.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/b2.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/b7.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Rich Culture of Barcelona</h2>
            <p class="mt-4">
                Barcelona is a city brimming with cultural heritage. From traditional Catalan cuisine like 'paella' and 'crema catalana' to the energetic beats of Flamenco and vibrant festivals like La Mercè, the city offers a unique cultural experience. The streets are filled with art, music, and an undeniable passion for life, making every corner a celebration of its diverse influences.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/b3.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/b5.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About Barcelona</h2>
            <p class="mt-4">
                Known for its stunning architecture, Mediterranean beaches, and bustling markets, Barcelona is a destination that offers a blend of tradition and modernity. Visitors can explore iconic landmarks like La Rambla, the Magic Fountain of Montjuïc, and the vibrant Barceloneta beach while experiencing the warmth of its people.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/b4.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/b6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <div class="d-flex justify-content-center flex-wrap">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Barcelona Tourism. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
