<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Login Form Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{url()}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url()}}/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url()}}/assets/css/form-elements.css">
    <link rel="stylesheet" href="{{url()}}/assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>FLS</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>სამართავი პანელი</h3>
                            <p>შეიყვანეთ მომხმარებლის სახელი და პაროლი:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="login-form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="sr-only" for="form-username">ელ-ფოსტა</label>
                                <input type="text" name="email" placeholder="ელ-ფოსტა..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">პაროლი</label>
                                <input type="password" name="password" placeholder="პაროლი..." class="form-password form-control" id="form-password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember" />
                                <label for="remember" style="color:white;">&nbsp;დამახსოვრება</label>
                            </div>
                            <button type="submit" class="btn">შესვლა</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{Hash::make(123)}}
</div>


<!-- Javascript -->
<script src="{{url()}}/assets/js/jquery-1.11.1.min.js"></script>
<script src="{{url()}}/assets/js/bootstrap.min.js"></script>
<script src="{{url()}}/assets/js/jquery.backstretch.min.js"></script>
<script src="{{url()}}/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="{{url()}}/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>