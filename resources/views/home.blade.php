<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Video Player App</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <h1 id="title-navbar" class="navbar-brand" href="#">Video Player App</h1>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">All Video</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <h4 class="container list-video">Upload Video :</h4>
    </div>
    <div class="container text-center mt-5">
        <div class="row row-cols-2 container">
            <input type="text" class="form-control" placeholder="Input video's title..." aria-label="Username"
                aria-describedby="addon-wrapping">
            <input type="file" class="form-control my-5" id="inputGroupFile02">
            <button type="button" class="btn btn-outline-success container">Upload</button>
        </div>
    </div>
    <div>
        <h4 class="container list-video">List Video :</h4>
    </div>
    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Video Title</h5>
            </div>
        </div>
    </div>
</body>

</html>