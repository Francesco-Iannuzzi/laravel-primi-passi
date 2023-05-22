<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /bootstrap style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /fontawesome -->
    <title>About</title>
</head>

<body class="bg-dark">

    <header>
        <nav class="nav justify-content-center py-3 bg-dark">
            <a class="nav-link text-danger" href="{{ route('home') }}">
                <h6>Home</h6>
            </a>
            <a class="nav-link" href="{{ route('about') }}">
                <h6>About</h6>
            </a>
            <a class="nav-link" href="{{ route('contact') }}">
                <h6>Contact</h6>
            </a>
        </nav>
        <!-- /navbar -->

    </header>
    <!-- /header -->

    <main>
        <section class="jumbo">
            <div class="p-5 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <div class="d-flex">
                        <h1 class="display-5 fw-bold text-danger me-4 mb-0">Welcome on Laravel</h1>
                        <i class="fa-brands fa-laravel fa-2x align-self-center text-danger"></i>
                    </div>
                    <p class="col-md-8 fs-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </section>
        <!-- /jumbo -->

        <section class="about_us bg-dark py-5">
            <div class=" container text-center text-light">
                <h1 class="display-6 fw-bold mb-3 text-danger"> {{$page_title}} </h1>
                <p>{{$description}}</p>
            </div>
        </section>
        <!-- /about us -->

    </main>
    <!-- /main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- /bootstrap script -->

</body>

</html>