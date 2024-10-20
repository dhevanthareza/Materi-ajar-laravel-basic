<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
            color: black
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Clean Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Post</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <div>
                <button class="btn btn-primary">Create new Post</button>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="card py-3 px-5">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <a href="post.html">
                        <h2>Man must explore, and this is exploration at its greatest</h2>
                        <h4 class="post-subtitle">Problems look mighty small from 150 miles up</h4>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 24, 2023
                    </p>
                </div>
                <div class="d-grid gap-2 col-md-2 mx-auto">
                        <button class="btn btn-outline-dark btn-block">
                            Edit
                        </button>
                        <button class="btn btn-danger">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
    </div>
    < <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>
