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
                            <a class="nav-link" href="docs.php"><i class="bi bi-layout-text-sidebar"></i>Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php"><i class="bi bi-info-circle"></i>About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid">
        <section class="container about">
            <h4 class="border-bottom border-3 py-2 my-4">Features</h4>
            <div class="row">
                <div class="col-lg-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between bg-main text-white border-bottom border-light">
                            <span class="fs-6">Request GET</span>
                            <i class="bi bi-check-circle-fill text-info"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-main text-white border-bottom border-light">
                            <span class="fs-6">Request POST</span>
                            <i class="bi bi-check-circle-fill text-info"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-main text-white border-bottom border-light">
                            <span class="fs-6">Request With Body</span>
                            <i class="bi bi-check-circle-fill text-info"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-main text-white border-bottom border-light">
                            <span class="fs-6">Request PUT</span>
                            <i class="bi bi-clock-fill text-warning"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-main text-white border-bottom border-light">
                            <span class="fs-6">Request PATCH</span>
                            <i class="bi bi-clock-fill text-warning"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-main text-white border-bottom border-light">
                            <span class="fs-6">Request DELETE</span>
                            <i class="bi bi-clock-fill text-warning"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-main text-white border-bottom border-light">
                            <span class="fs-6">Request With Header</span>
                            <i class="bi bi-clock-fill text-warning"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="container about">
            <h4 class="border-bottom border-3 py-2 my-4">Technologies Used</h4>
            <div class="row justify-content-between">
                <div class="col-lg-3">
                    <div class="card bg-main">
                        <div class="card-body">
                            <h5 class="card-title border-bottom border-2 py-2">Languages</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-main text-white border-bottom border-light">HTML</li>
                                <li class="list-group-item bg-main text-white border-bottom border-light">CSS</li>
                                <li class="list-group-item bg-main text-white border-bottom border-light">Javascript</li>
                                <li class="list-group-item bg-main text-white border-bottom border-light">PHP</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-main">
                        <div class="card-body">
                            <h5 class="card-title border-bottom border-2 py-2">Libraries</h5>
                            <div class="list-group list-group-flush">
                                <a href="https://getbootstrap.com/" target="_blank" class="list-group-item bg-main text-white border-bottom border-light">Bootstrap v5</a>
                                <a href="https://icons.getbootstrap.com/" target="_blank" class="list-group-item bg-main text-white border-bottom border-light">Bootstrap icons</a>
                                <a href="https://github.com/mohsen1/json-formatter-js" target="_blank" class="list-group-item bg-main text-white border-bottom border-light">JSON Formatter</a>
                                <a href="https://loading.io/css/" target="_blank" class="list-group-item bg-main text-white border-bottom border-light">Loading.io</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-main">
                        <div class="card-body">
                            <h5 class="card-title border-bottom border-2 py-2">Extensions</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-main text-white border-bottom border-light">PHP cURL</li>
                                <li class="list-group-item bg-main text-white border-bottom border-light">AJAX</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container about">
            <h4 class="border-bottom border-3 py-2 my-4">How It Works</h4>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img src="../assets/img/proccess.svg" alt="Flowchart" class="bg-light p-5 rounded img-fluid">
                </div>
            </div>
        </section>
        <section class="container about">
            <h4 class="border-bottom border-3 py-2 my-4">About Author</h4>
            <div class="card mb-3 bg-main">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../assets/img/image10.jpg" alt="My Photos" class="w-100 rounded rounded-full">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">M. Miftah Hamdani</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= date_diff(date_create("1995-02-16"), date_create(date('Y-m-d')))->format('%y') ?>, Bachelor of Informatics Engineering, IT Enthusiast, Web Developer</h6>
                            <p class="card-text mt-4"><i class="bi bi-gear-wide-connected"></i>Soft Skill</p>
                            <p class="card-text ms-4"><i class="bi bi-asterisk"></i><small>Coding Guidlines, Debugging, Able to work with or w/o teams, Programmatically</small></p>
                            <p class="card-text mt-4"><i class="bi bi-gear-fill"></i>Hard Skill</p>
                            <p class="card-text ms-4"><i class="bi bi-asterisk"></i><small>Web Technologies (HTML, CSS, Javascript) with some Libraries, PHP (CI, Laravel), MySQL, Linux Environment, <i>etc</i></small></p>
                            <p class="card-text mt-4"><i class="bi bi-person-fill"></i>Personality</p>
                            <p class="card-text ms-4"><i class="bi bi-asterisk"></i><small>Humorous, Playful, Hopefulness, Humility, and Modesty</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container about">
            <h4 class="border-bottom border-3 py-2 my-4">License</h4>
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    This Software is open-sourced software licensed under the <a href="http://www.gnu.org/licenses/gpl-3.0.html" class="text-light">GPLv3</a>
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