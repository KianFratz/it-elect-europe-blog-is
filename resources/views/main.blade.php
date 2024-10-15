<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            padding: 0;
        }
        body {
            margin-bottom: 50px;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>S
<body>
    <div class="text-center">
        <h2>FAMOUS CITIES OF EUROPE</h2>
    </div>
    <div class = "container">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <img src="images/edinburgh.jpg" alt="Edinburgh" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Edinburgh</h5>
                        <p class="card-text">Edinburgh, the capital city of Scotland, boasts a rich history that stretches back over a thousand years. It became a center of education, philosophy, literature, and law during the Scottish Enlightenment in the 18th century.
                        </p>
                        <div class="text-left mt-4">
                            <a href="{{ route('edinburgh.show') }}" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                    <img src="images/amsterdam.jpg" alt="Amsterdam" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Amsterdam</h5>
                        <p class="card-text">Amsterdam, the capital city of the Netherlands, has a rich history that dates back to the 12th century as a small fishing village on the banks of the Amstel River. Over time, it grew into one of the most important trading</p>
                        <div class="text-left mt-4">
                            <a href="{{ route('amsterdam.show') }}" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                    <img src="images/prague.jpg" alt="Prague" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Prague</h5>
                        <p class="card-text">Prague, the capital city of the Czech Republic, has a rich history that spans over a thousand years.  Known as the "City of a Hundred Spires," it was founded during the Romanesque period and flourished during</p>
                        <div class="text-left mt-4">
                            <a href="{{ route('prague.show') }}" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                    <img src="images/athens.jpg" alt="Athens" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Athens</h5>
                        <p class="card-text">Athens, the capital of Greece, is often considered the cradle of Western civilization and democracy. Its history spans over 3,000 years, with roots in ancient Greece. The city was the center of philosophy, arts, and</p>
                        <div class="text-left mt-4">
                            <a href="{{ route('athens.show') }}" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "container">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <img src="images/cologne.jpg" alt="Cologne" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Cologne</h5>
                        <p class="card-text">Cologne, one of Germany's oldest cities, was founded by the Romans in 50 AD and became a major center for trade and commerce in the Middle Ages. The city's history is marked by its impressive Gothic architecture</p>
                        <div class="text-left mt-4">
                            <a href="{{ route('cologne.show') }}" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                    <img src="images/paris.jpg" alt="Paris" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Paris</h5>
                        <p class="card-text">Paris, the capital of France, has a history that stretches back over 2,000 years. Founded by the Parisii tribe in the 3rd century BC, the city later became a significant center under Roman rule.</p>
                        <div class="text-left mt-4">
                            <a href="{{ route('paris.show') }}" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                    <img src="images/vienna.jpg" alt="Vienna" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Vienna</h5>
                        <p class="card-text">Vienna, the capital of Austria, has a rich and fascinating history that dates back to Roman times. It was once the center of the Habsburg Empire, and its stunning architecture reflects centuries of imperial power.</p>
                        <div class="text-left mt-4">
                            <a href="{{ route('vienna.show') }}" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                    <img src="images/barcelona.jpg" alt="Barcelona" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Barcelona</h5>
                        <p class="card-text">Barcelona, founded as a Roman city, has a rich history that spans over 2,000 years. It has seen transformations from a medieval city with iconic Gothic architecture to a bustling modern metropolis.</p>
                        <div class="text-left mt-4">
                            <a href="{{ route('barcelona.show') }}" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>