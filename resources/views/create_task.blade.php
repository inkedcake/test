@extends('header')
@section('content')
<form action="{{'tasks-create-submit'}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="email" class="form-control" id="name" >
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>
@endsection
