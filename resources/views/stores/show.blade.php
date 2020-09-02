@extends('stores.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show stores</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('stores.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>name:</strong>
{{ $store->name }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>building:</strong>
{{ $store->building }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>floor:</strong>
{{ $store->floor }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>size:</strong>
{{ $store->size }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>device:</strong>
{{ $store->device }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>image:</strong>
{{ $store->image }}
</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Content:</strong>
{{ $store->content }}
</div>
</div>

</div>
@endsection
