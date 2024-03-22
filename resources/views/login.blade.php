<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CLSU-CVSM Admin Login</title>
    <style>
        .box-area {
            width: 800px; /* Set maximum width */
        }
    </style>
</head>
<body>


    <div class="container d-flex justify-content-center align-items-center min-vh-100 p-4">

        <div class="row rounded-3 bg-white shadow box-area">

            <div class="col-sm rounded-2 d-flex justify-content-center align-items-center flex-column" style="background-image: url('{{ asset('assets_cvsm/images/login-image.png') }}'); background-size: cover; background-position: center;">
                <div class="featured-image m-3">
                    <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1"style="width: 200px;">
                </div>
            </div> 

                
            <div class="col-sm" style="padding: 40px 30px 40px 30px">
                <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Hello, Admin</h2>
                            <p>We are happy to have you back. please login to continue</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                        </div>
                        <div class="input-group mb-3 mt-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6 ">Login</button>
                        </div>
                </div>
            </div> 

        </div>
    </div>

</body>
</html>
