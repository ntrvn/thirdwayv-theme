@extends('layouts.app')

@section('content')

@foreach ($cases as $case)
    <a href="{{$case->link}}">{{$case->title}}</a>
@endforeach


@endsection
