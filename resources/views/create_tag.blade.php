@extends('header')
@section('content')
<form action="{{'tags-create-submit'}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="email" class="form-control" id="name" >
    </div>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>
@endsection
