@extends('header')
@section('title')
{{$title}}
@endsection

@section('content')
    <div class="row justify-content-center align-items-center my-auto" style="padding-top: 10%">
        <div class="col-auto align-bottom">
            <table class="table table-responsive table-striped table-sm ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    @if($hasDesc)
                    <th>Description</th>
                    @endif
                    <th>Created at</th>
                    <th>Link</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        @if($hasDesc)
                        <td>{{$item->description}}</td>
                        @endif
                        <td>{{$item->created_at}}</td>
                        <td><a href="{{route($link,['id'=>$item->id])}}">{{$title}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
