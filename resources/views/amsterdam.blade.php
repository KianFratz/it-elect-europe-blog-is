<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amsterdam - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Amsterdam</a>
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
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/ams1.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Amsterdam</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History</h2>
            <p class="mt-4">
                Amsterdam, the capital city of the Netherlands, has a rich history that dates back to the 12th century as a small fishing village on the banks of the Amstel River. Over time, it grew into one of the most important trading centers in the world during the Dutch Golden Age in the 17th century. The city became known for its innovative canal system, which remains a UNESCO World Heritage Site. Amsterdam's history is intertwined with its role in global trade, exploration, and cultural development. Today, the city is known for its historic architecture, charming canals, and vibrant cultural scene.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/ams2.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/ams3.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Culture</h2>
            <p class="mt-4">
                Amsterdam's culture is a dynamic blend of tradition and modernity, making it a haven for art lovers and history enthusiasts alike. The city is home to world-class museums such as the Rijksmuseum, the Van Gogh Museum, and the Anne Frank House, each offering a glimpse into different facets of its cultural heritage. Amsterdam is also known for its liberal attitude, vibrant nightlife, and diverse culinary scene, featuring Dutch delicacies like 'stroopwafels' and 'haring'. The city celebrates numerous festivals throughout the year, including King's Day and the Amsterdam Light Festival, showcasing its spirit of creativity and inclusivity.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/ams4.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/ams5.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About</h2>
            <p class="mt-4">
                Amsterdam is a city that combines rich history with a forward-thinking attitude. With a population of around 900,000, it is known for its picturesque canals, historic homes, and welcoming atmosphere. The city’s cycling culture, extensive canal network, and charming neighborhoods like Jordaan and De Pijp make it a unique and eco-friendly destination. Amsterdam's multicultural nature is reflected in its diverse culinary offerings, art galleries, and vibrant markets. Whether strolling through the flower markets or exploring its innovative architecture, Amsterdam offers a mix of historical charm and modern living.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/ams6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/ams7.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <div class="d-flex justify-content-center flex-wrap">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Amsterdam Tourism. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
