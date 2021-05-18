<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha256-PDJQdTN7dolQWDASIoBVrjkuOEaI137FI15sqI3Oxu8=" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/mystyle.css">
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
                            <a class="nav-link active" href="index.php"><i class="bi bi-house-door"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app/docs.php"><i class="bi bi-layout-text-sidebar"></i>Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app/about.php"><i class="bi bi-info-circle"></i>About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid">
        <div class="row g-3">
            <div class="col-lg-6">
                <form action="#" method="POST" id="formRequest">
                    <label for="url" class="form-label">Endpoint URL</label>
                    <div class="mb-3 input-group g-0">
                        <div class="input-group-prepend">
                            <select name="method" class="form-select" id="switchSelect">
                                <option value="get">Get</option>
                                <option value="post">Post</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" id="url" name="url" placeholder="https://api.example.com" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-primary" id="request" type="button"><i class="bi bi-cloud-upload"></i>Request</button>
                        </div>
                    </div>
                    <div id="formTable" class="hide">
                        <label for="body" class="form-label mt-2">Body (if method is post)</label>
                        <div class="row m-0 d-none d-lg-flex fillable text-center">
                            <div class="col-lg-4 py-1 px-2"><i class="bi bi-key-fill"></i>Key</div>
                            <div class="col-lg-8 py-1 px-2"><i class="bi bi-file-earmark-font-fill"></i>Value</div>
                        </div>
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <div class="row m-0 d-lg-flex fillable">
                                <div class="col-lg-4 p-0">
                                    <label class="d-lg-none">Key <?= $i ?></label>
                                    <input type="text" class="form-control form-control-sm" name="key[]" placeholder="Key <?= $i ?>">
                                </div>
                                <div class="col-lg-8 p-0">
                                    <label class="d-lg-none">Value <?= $i ?></label>
                                    <input type="text" class="form-control form-control-sm" name="value[]" placeholder="Value <?= $i ?>">
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="result" class="form-label">Result</label>
                    <div id="result" class="bg-white text-dark p-2 rounded">
                        <p id="preholder">Result Sould Be Here..</p>
                        <div class="lds-dual-ring" id="loading">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/json-formatter-js@2.3.4/dist/json-formatter.umd.js" integrity="sha256-jrQIudFON1sgGYJS9VH1D7aJ8K2s7hrZeLmhZ49d3Wc=" crossorigin="anonymous"></script>
    <script src="assets/js/myscript.js"></script>
</body>

</html>