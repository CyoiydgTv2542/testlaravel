<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
<link href="http://meetingroom.rid.go.th/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="http://meetingroom.rid.go.th/assets/css/toast.min.css" rel="stylesheet">
<link href="http://meetingroom.rid.go.th/assets/css/lightbox.css" rel="stylesheet">
<link href="http://meetingroom.rid.go.th/assets/css/main.css" rel="stylesheet">
<script src="http://meetingroom.rid.go.th/assets/js/jquery-1.11.3.min.js"></script>
<script src="http://meetingroom.rid.go.th/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="http://meetingroom.rid.go.th/assets/js/toast.min.js"></script>
<script src="http://meetingroom.rid.go.th/assets/js/lightbox.js"></script>

<!-- Custom styles for this template -->
<link href="http://meetingroom.rid.go.th/assets/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://meetingroom.rid.go.th/assets/bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="http://meetingroom.rid.go.th/assets/js/ie-emulation-modes-warning.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://meetingroom.rid.go.th/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="http://meetingroom.rid.go.th/assets/bootstrap-fileinput/js/plugins/canvas-to-blob.js"></script>
<script src="http://meetingroom.rid.go.th/assets/bootstrap-fileinput/js/fileinput.js"></script>
<script src="http://meetingroom.rid.go.th/assets/moment/min/moment.min.js"></script>
<script src="http://meetingroom.rid.go.th/assets/moment/min/locales.min.js"></script>
<link href="http://meetingroom.rid.go.th/assets/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="http://meetingroom.rid.go.th/assets/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
       
<!-- Full calendar stylesheets -->
<link href="http://meetingroom.rid.go.th/assets/fullcalendar-2.4.0/fullcalendar.css" rel="stylesheet" />
<link href="http://meetingroom.rid.go.th/assets/fullcalendar-2.4.0/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="http://meetingroom.rid.go.th/assets/fullcalendar-2.4.0/lib/moment.min.js"></script>
<!--<script src="http://meetingroom.rid.go.th/assets/fullcalendar-2.4.0/lib/jquery.min.js"></script>-->
<script src="http://meetingroom.rid.go.th/assets/fullcalendar-2.4.0/fullcalendar.min.js"></script>
<script src="http://meetingroom.rid.go.th/assets/fullcalendar-2.4.0/lang-all.js"></script>
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
               \\ display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <div class="logo" align="center">
                        <img src="images/logo.png" width=100 alt="Responsive image" class="img-responsive">
                    
                    ระบบการจองห้องประชุม
                    </div>
                </div>
            </div>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" 
data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
</nav>
            
<div class="container">
<style type="text/css">
                body {
                    background-image: url();
                }
                
            </style>
<div class="row">
<div class="col-lg-12">
<h4><strong>รายละเอียดและข้อมูลทั่วไป</strong></h4>
</div>
</div>
<div class="row text-center">
<div role="tabpanel">
<ul class="nav nav-tabs" style="background-color:#e3f2fd;" role="tablist">
<li role="presentation" class="active"><a href="#room" aria-controls="room" role="tab" data-toggle="tab">รายละเอียดห้องประชุม</a></li>
<li role="presentation"><a href="#device" aria-controls="device" role="tab" data-toggle="tab">รายละเอียดอุปกรณ์</a></li>
<li role="presentation"><a href="#rule" aria-controls="rule" role="tab" data-toggle="tab">กฎระเบียบการจองห้องประชุม</a></li>
<li role="presentation"><a href="#contact" aria-controls="form" role="tab" data-toggle="tab">ติดต่อผู้ดูแลระบบ</a></li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="room">
<br/>
<div class="container homePage">
            
<div class="row">               
<div class="col-lg-4">
<img class="img-rounded" src="images/1.jpg" width="350" height="270"/>                       
<p>ห้องประชุม : เจ้าเสวย<p>
<p>ที่ตั้ง      : โรงอาหารชั้น 4<p>
<p>ความจุ    : 30-50 คน</p>
<p><a class="btn btn-default" href="" role="button">รายละเอียด &raquo;</a></p>
</div>
</div>



</div>
</body>
</html>

