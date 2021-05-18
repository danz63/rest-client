<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha256-PDJQdTN7dolQWDASIoBVrjkuOEaI137FI15sqI3Oxu8=" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
</head>

<body class="d-flex flex-column h-100 w-100 text-white bg-option">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-main">
            <div class="container">
                <h3 class="float-md-start mb-0">Rest Client</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-masthead">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php"><i class="bi bi-house-door"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="docs.php"><i class="bi bi-layout-text-sidebar"></i>Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><i class="bi bi-info-circle"></i>About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mb-3">
        <section class="docs">
            <h4 class="border-bottom border-3 py-2 my-4">GET</h4>
            <div class="row container mx-auto">
                <div class="col">
                    <img src="../assets/img/get.png" alt="Get Image" class="img-fluid bg-white p-3">
                    <p class="text-center text-secondary mt-1"><small>Image 1, Screenshot Form With Section Information</small></p>
                    <div class="bg-main p-3 mt-3">
                        <h6 class="border-bottom border-2">Tutorials</h6>
                        <ul>
                            <li>Set <b>TOGGLE METHOD</b> To `Get`</li>
                            <li>Fill <b>URL FORM</b> With API Server's Endpoint</li>
                            <li>Click <b>PROCCES BUTTON</b> or Hit Enter when <b>URL FORM</b> is focused</li>
                            <li>If Endpoint responds, in <b>RESULT BOX</b> will appear response</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h4 class="border-bottom border-3 py-2 my-4">POST</h4>
            <div class="row container mx-auto">
                <div class="col">
                    <img src="../assets/img/post.png" alt="Post Image" class="img-fluid bg-white p-3">
                    <p class="text-center text-secondary mt-1"><small>Image 2, Screenshot Form With Section Information</small></p>
                    <div class="bg-main p-3 mt-3">
                        <h6 class="border-bottom border-2">Tutorials</h6>
                        <ul>
                            <li>Set <b>TOGGLE METHOD</b> To `Post`</li>
                            <li>Fill <b>URL FORM</b> With API Server's Endpoint</li>
                            <li>Fill <b>KEY FORM</b> and <b>VALUE FORM</b></li>
                            <li>Click <b>PROCCES BUTTON</b> or Hit Enter when <b>URL FORM</b> is focused</li>
                            <li>If Endpoint responds, in <b>RESULT BOX</b> will appear response</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="mt-auto text-white-50 text-center bg-main py-2">
        <p class="my-3">Made With <i class="bi bi-heart-fill"></i> by danz63</p>
        <p class="my-3">
            <a href="https://web.facebook.com/moch.dhannie/" target="_blank" class="text-white-50 fs-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://github.com/danz63" target="_blank" class="text-white-50 fs-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Github"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/danz63/" target="_blank" class="text-white-50 fs-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="mailto:hamdan.miftah63@gmail.com" target="_blank" class="text-white-50 fs-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Email"><i class="bi bi-envelope-fill"></i></a>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>