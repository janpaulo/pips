<!DOCTYPE html>
<html lang="en">

<head>
    <title>PhilHealth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./asset/css/global.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/5.0.2_dist_css_bootstrap.min.css" rel="stylesheet">
		<link href="./asset/sweetalert2/package/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">



    <style>
    a {
        text-decoration: none;
    }

    .login-page {
        width: 100%;
        height: 100vh;
        display: inline-block;
        display: flex;
        align-items: center;
        background-image: url("../../asset/img/oooscillate.svg");
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: cover;
    }

    .form-right i {
        font-size: 100px;
    }

    .bg-primary {
        background-color: #43B02A !important;
    }

    .text-primary {
        color: #43B02A !important;
    }

    .btn-primary {
        color: #fff;
        background-color: #78BE20;
        border-color: #78BE20;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #43B02A;
        border-color: #43B02A;
    }

    .form-control:focus {
        border-color: #F6EB61 !important;
        box-shadow: 0 0 0 0.25rem rgba(246, 235, 97, .25);
    }

    .form-check-input:checked {
        background-color: #78BE20;
        border-color: #78BE20;
    }

    .form-check-input:focus {
        border-color: #F6EB61;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, .25);
    }

    .subtext {
        font-size: 24px;
        line-height: 32px;
        margin-top: 15px;
        padding: 0 45px;
        text-shadow: 0px -1px 5px black;
    }
    </style>

</head>

<body>

    <div class="login-page bg-light bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <h3 class="mb-3">Login to your account</h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="row g-4">
                                                <div class="col-12">
                                                    <label>User ID<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="fa fa-user-circle"></i>
                                                        </div>
                                                        <input type="text" class="form-control" id="username" name="userid"
                                                            placeholder="Enter User ID">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label>Password<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                                        <input type="password" class="form-control"  id="password" name="password"
                                                            placeholder="Enter Password">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineFormCheck">
                                                        <label class="form-check-label" for="inlineFormCheck">Remember
                                                            me</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <a href="#" class="float-end text-primary">Forgot Password?</a>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary px-4 float-end mt-4"
                                                onclick="handleLogin()">Login</button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block"
                                style="    box-shadow: 4px 8px 15px #d3d3d3;padding-right: 0;">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <!-- <i class="bi bi-bootstrap"></i> -->
                                    <img src="http://localhost/peps/asset/img/ph_logo_small.png" width="200" height="75"
                                        alt="PhilHealth Logo"><br><br>
                                    <h2 style="text-shadow: -1px 0px 3px #866400;margin-top: 10px;font-size: 55px;">
                                        PEARS</h2>
                                    <div class="subtext">PhilHealth Employees Attendance and Remuneration System</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-end text-secondary mt-3"></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
		
<!-- jQuery -->
<script src="./asset/js/jquery-3.7.1.min.js"></script>
    <!-- JS Action -->
    <script src="./asset/js/action.js"></script>
		<script src="./asset/sweetalert2/package/dist/sweetalert2.min.js"></script>
</body>

</html>