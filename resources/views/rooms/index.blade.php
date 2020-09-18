@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
    <center><h2>ห้องประชุม</h2></center>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('rooms.create') }}"> เพิ่มข้อมูล</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>

<th>ห้องที่</th>
<th>เลขห้อง</th>
<th>ชื่อห้อง</th>
<th>ที่ตั้ง</th>
<th>การรองรับ</th>
<th>อุปกรณ์</th>
<th>รูปภาพ</th>
<th width="280px">Action</th>
</tr>
@foreach ($rooms as $room)
<tr>
 
<td>{{ $room->id }}</td>
<td>{{ $room->coderoom }}</td>
<td>{{ $room->name }}</td>
<td>{{ $room->locate }}</td>
<td>{{ $room->size }}</td> 
<td>{{ $room->advice }}</td>

<td>
    <a href="{{ asset('images/'.$room->image)}}"  >
    <img src="{{ asset('images/'.$room->image)}}"style="width:50px" data-lity ></a>
</td>    
<td> 
<form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('rooms.show',$room->id) }}">รายละเอียด</a>
<a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">แก้ไข</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">ลบ</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
