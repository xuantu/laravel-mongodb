@extends('admin/admin_template')

@section('header')
    <h1>
        Edit Permission
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
@endsection

@section('content')
    {!! form($form) !!}
@endsection