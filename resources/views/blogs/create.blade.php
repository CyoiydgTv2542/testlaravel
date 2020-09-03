@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
    <center><h2>บันทึกข้อมูล</h2> </center>

</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('blogs.index') }}"> ย้อนกลับ</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('blogs.store') }}" method="POST">
@csrf

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ชื่อห้อง:</strong>
<input type="text" name="title" class="form-control" placeholder="title">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>สถานที่:</strong>
    <input type="text" name="locate" class="form-control" placeholder="locate">
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>ขนาดห้อง:</strong>
        <input type="text" name="size" class="form-control" placeholder="size">
        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>รูปภาพ:</strong>
            {!! Form::label('image','รูปภาพ'); !!}
            <?= Form::file('image',null,['class'=>'form-control']) ?>
        </div> 
    </div>


<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ข้อมูลเพิ่มเติม:</strong>
<textarea class="form-control" style="height:150px" name="content" placeholder="Content"></textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">บันทึก</button>
</div>
</div>
</form>
@endsection
