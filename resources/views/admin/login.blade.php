<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TIN DO SONY login</title>

    <!-- Bootstrap -->
    <link href="{{ asset("admin/vendors/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/build/css/custom.min.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/vendors/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    {{--<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <!-- Font Awesome -->
    {{--<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">--}}
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    {{--<link href="../build/css/custom.min.css" rel="stylesheet">--}}
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post">
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" name="email" class="form-control" placeholder="Username" required="required" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required" />
                    </div>
                    <div class="col-lg-offset-3">
                        <input type="submit" value="Đăng nhập" class="btn btn-default">
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div>
                            <h1><i class="fa fa-paw"></i> TIN DO SONY</h1>
                            <p>©2016 All Rights Reserved. TIN DO SONY. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>