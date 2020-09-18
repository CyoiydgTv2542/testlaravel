@extends('layouts.master')
@section('content')

<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
    
<center><h2> รายละเอียด </h2></center>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('rooms.index') }}"> ย้อนกลับ</a>
</div>
</div>
</div>
<center>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> รูปภาพ : </strong>
{{ $room->image }}
<br>
<a href="{{ asset('images/'.$room->image) }}"  >
<img src="{{ asset('images/'.$room->image) }}"style="width:300px" data-lity ></a>
</br>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ห้องที่ : </strong>
{{ $room->id }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> เลขห้อง : </strong>
{{ $room->coderoom }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ชื่อห้อง : </strong>
{{ $room->name }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ที่ตั้ง : </strong>
{{ $room->locate }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> การรองรับ : </strong>
{{ $room->size }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> อุปกรณ์ : </strong>
{{ $room->advice }}
</div>
</div>

</div>
</div>
</div></center>
@endsection
