@extends('stores.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>บันทึกข้อมูลห้องประชุม</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('stores.index') }}"> ย้อนกลับ</a>
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
<form action="{{ route('stores.store') }}" method="POST">
@csrf

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ชื่อห้อง:</strong>
<input type="text" name="name" class="form-control" placeholder="name">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ตึก/อาคาร:</strong>
<input type="text" name="building" class="form-control" placeholder="building">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ชั้น:</strong>
<input type="text" name="floor" class="form-control" placeholder="floor">
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
<strong>อุปกรณ์:</strong>
<textarea class="form-control" style="height:150px" name="content" placeholder="content"></textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>รูปภาพ:</strong>
<input type="text" name="image" class="form-control" placeholder="image">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ข้อมูลเพิ่มเติม:</strong>
<textarea class="form-control" style="height:150px" name="content" placeholder="content"></textarea>
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
