@extends('header')
@section('content')
<form action="{{route('tags-create-submit')}}" method="post" style="padding-top: 20%">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" name="name" id="name" >
    </div>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>
@endsection
