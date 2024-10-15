<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athens - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Athens</a>
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
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/a7.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Athens</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History</h2>
            <p class="mt-4">
                Athens, the capital of Greece, is often considered the cradle of Western civilization and democracy. Its history spans over 3,000 years, with roots in ancient Greece. The city was the center of philosophy, arts, and learning in the classical era, home to legendary philosophers like Socrates, Plato, and Aristotle. Iconic landmarks such as the Acropolis, the Parthenon, and the Ancient Agora stand as testaments to its glorious past. Despite numerous challenges throughout history, including Ottoman occupation and World War II, Athens has preserved its rich heritage while growing into a modern metropolis.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/a1.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/a3.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Culture</h2>
            <p class="mt-4">
                Athens is a vibrant city where ancient traditions blend seamlessly with modern life. Its cultural scene is marked by traditional Greek music, dance, and theater, as well as contemporary art galleries and festivals. Athens is famous for its culinary heritage, offering dishes like moussaka, souvlaki, and fresh seafood in traditional tavernas. The city hosts numerous cultural festivals, including the Athens Epidaurus Festival, which attracts international artists. Athens' neighborhoods, like Plaka and Monastiraki, offer a rich tapestry of history, with bustling markets, street art, and ancient ruins.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/a4.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/a5.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About</h2>
            <p class="mt-4">
                Athens, with a population of over 3 million, is the heart of Greece's economic, political, and cultural life. It is a city where the ancient and modern coexist, offering a unique blend of archaeological sites and contemporary urban living. The city’s stunning hilltop views, vibrant street life, and rich history make it a top destination for travelers. Athens is known for its warm Mediterranean climate, bustling markets, and welcoming locals who share their heritage with visitors. Whether exploring ancient ruins or enjoying a sunset over the Aegean Sea, Athens is a city that leaves a lasting impression.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/a2.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/a6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
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
