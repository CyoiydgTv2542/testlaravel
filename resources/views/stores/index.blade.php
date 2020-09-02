@extends('stores.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>บันทึกข้อมูลห้องประชุม</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('stores.create') }}"> บันทึกข้อมูล </a>
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
<th>รหัส</th>
<th>ชื่อห้อง</th>
<th>ตึก</th>
<th>ชั้น</th>
<th>ขนาดห้อง</th>
<th>อุปกรณ์</th>
<th>รูปภาพ</th>
<th>ข้อมูลเพิ่มเติม</th>
<th width="280px">Action</th>
</tr>
@foreach ($stores as $store)
<tr>
<td>{{ $store->id }}</td>
<td>{{ $store->name }}</td>
<td>{{ $store->building }}</td>
<td>{{ $store->floor }}</td>
<td>{{ $store->size }}</td>
<td>{{ $store->device }}</td>
<td>{{ $store->image }}</td>
<td>{{ $store->content }}</td>
<td>
<form action="{{ route('stores.destroy',$store->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('stores.show',$store->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('stores.edit',$store->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
