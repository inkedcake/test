@extends('header')
@section('content')
<form action="{{route('tasks-create-submit')}}" method="post" style="padding-top: 20%">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="select">Choose tags(multiple)</label>

        <select class="form-select" name="tags[]" multiple id="select" aria-label="Choose tags(multiple)">
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>
@endsection
