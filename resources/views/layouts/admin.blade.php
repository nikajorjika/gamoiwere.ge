<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Panel">
    <meta name="author" content="256BIT">

    <title>FLS - CMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url()}}/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url()}}/assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url()}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="{{url()}}/assets/css/stylemod.css" rel="stylesheet">

    <script src="{{url()}}/ckeditor/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                @include('admin.components.header')

                @yield('content')
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{url()}}/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url()}}/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#delete').on('click', function(){
            if(confirm('ნამდვილად გსურთ წაშლა?')){
                return true;
            }else{
                return false;
            }
        });
    </script>
    <script type="text/javascript" src="{{url()}}/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url()}}/assets/js/jquery.nestable.js"></script>
    <script type="text/javascript" src="{{url()}}/assets/js/function.js"></script>
</body>
</html>
