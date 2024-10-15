<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edinburgh - Discover Its Rich Culture and History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Edinburgh</a>
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
    <header class="bg-dark text-white text-center py-5" style="background-image: url('images/e1.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Welcome to Edinburgh</h1>
            <p class="lead">Explore the vibrant history and rich culture of this beautiful city.</p>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center">History</h2>
            <p class="mt-4">
                Edinburgh, the capital city of Scotland, boasts a rich history that stretches back over a thousand years. It became a center of education, philosophy, literature, and law during the Scottish Enlightenment in the 18th century. The city's iconic landmarks, such as Edinburgh Castle, which sits atop an ancient volcanic rock, and the Royal Mile, reflect its medieval and Renaissance heritage. Edinburgh is also known for its role in the development of Scotland's parliamentary and legal traditions. Today, the city remains a cultural and political center, attracting millions of visitors each year with its historic architecture and vibrant festivals.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/e2.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/e3.jpeg" alt="Historic Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Culture</h2>
            <p class="mt-4">
                Edinburgh's culture is a captivating blend of tradition and modernity. The city is renowned for its literary heritage, being home to famous writers such as Sir Walter Scott, Robert Louis Stevenson, and J.K. Rowling. Every August, the city hosts the world-famous Edinburgh Festival Fringe, the largest arts festival in the world, along with the International Festival, celebrating music, theater, and dance. Edinburgh's culinary scene ranges from traditional Scottish dishes like haggis to modern fine dining. With its ancient pubs, art galleries, and the majestic Edinburgh Castle, the city offers a rich cultural experience for all.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="images/e4.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
                <img src="images/e5.jpeg" alt="Cultural Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About</h2>
            <p class="mt-4">
                Edinburgh is a city of striking contrasts, blending medieval charm with a vibrant, modern energy. With a population of over 500,000, it is known for its scenic hills, cobbled streets, and stunning views from Arthur's Seat, an ancient volcano. The city’s Old Town and New Town are recognized as a UNESCO World Heritage Site, featuring iconic sites such as the Palace of Holyroodhouse and Princes Street Gardens. Edinburgh's festivals, scenic landscapes, and welcoming atmosphere make it a must-visit destination, whether you're exploring its historical roots or enjoying its contemporary art scene.
            </p>
            <div class="d-flex justify-content-center flex-wrap">
            <img src="images/e6.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <img src="images/e7.jpeg" alt="About Barcelona" class="img-fluid mt-3 rounded" style="width: 600px; height: 300px; object-fit: cover;">
            <div class="d-flex justify-content-center flex-wrap">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Edinburgh Tourism. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
