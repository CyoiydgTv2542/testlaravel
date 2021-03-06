@extends('stores.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit stores</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('stores.index') }}"> Back</a>
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
<form action="{{ route('stores.update',$store->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>name:</strong>
<input type="text" name="name" value="{{ $store->name }}" class="form-control" placeholder="name">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>building:</strong>
<textarea class="form-control" style="height:150px" name="building" placeholder="building">{{ $store->content }}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>floor:</strong>
<textarea class="form-control" style="height:150px" name="floor" placeholder="floor">{{ $store->content }}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>size:</strong>
<textarea class="form-control" style="height:150px" name="size" placeholder="size">{{ $store->content }}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>device:</strong>
<textarea class="form-control" style="height:150px" name="device" placeholder="device">{{ $store->content }}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>image:</strong>
<textarea class="form-control" style="height:150px" name="image" placeholder="image">{{ $store->content }}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Content:</strong>
<textarea class="form-control" style="height:150px" name="content" placeholder="Detail">{{ $store->content }}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>


</form>
@endsection
