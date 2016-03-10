@extends('admin/admin_template')

@section('header')
    <h1>
        Role List
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <form method="post" action="">
                        <?php //include_once(__DIR__ . '/partial/filter.phtml'); ?>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><input type="checkbox" value="1" id="checkall" class="checkall"/></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td><input type="checkbox" class="checkitem" name="data[Choose][]" value="{{$role->_id}}"/></td>
                                    <td><a href="{{ URL::route("admin.roles.edit", array('role' => $role->_id)) }}">{{$role->_id}}</a></td>
                                    <td><a href="{{ URL::route("admin.roles.edit", array('role' => $role->_id)) }}">{{$role->name}}</a></td>
                                    <td>{{$role->display_name}}</td>
                                    <td>{{$role->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <?php

                            ?>
                        </div>
                        <input type="hidden" name="callaction" id="callaction" value=""/>
                        <input type="hidden" name="choose[]" value=""/>
                        <input type="hidden" name="filter_order" id="filter_order" value=""/>
                        <input type="hidden" name="filter_order_Dir" id="filter_order_Dir" value=""/>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection