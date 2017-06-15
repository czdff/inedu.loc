@extends('layouts.app')

@section('title', $hometask->title)
@section('groupName', $group->title)

@section('content')
    <h3 class="page-header">{{ $hometask->title }}</h3>
    <p>{{ $hometask->description }}</p>
@endsection