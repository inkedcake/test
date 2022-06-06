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
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        @if($hasDesc)
                            <td>{{$data->description}}</td>
                        @endif
                        <td>{{$data->created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
