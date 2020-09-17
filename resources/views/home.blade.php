@extends('layouts.master')

@section('content')
<center>
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
        <div class="col-sm-6">
          <div class="logo" align="center">
            <img src="images/logo.png" width=50 alt="Responsive image" class="img-responsive">
          <h1 class="m-0 text-dark">ระบบการจองห้องประชุมของมหาวิทยาลัยราชภัฏราชนคริทร์</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid --></center>
  
  <!-- /.content-header -->

  <!-- Main content --><center>
  <section class="content">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('dist/img/a.jpg')}}" class="d-block w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('dist/img/b.jpg')}}" class="d-block w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('dist/img/c.jpg')}}" class="d-block w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
        </div>

        
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div></center>
  </section>
@endsection
