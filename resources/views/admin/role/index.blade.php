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
                            @foreach ($role as $r)
                                <tr>
                                    <td><input type="checkbox" class="checkitem" name="data[Choose][]" value="{{$r->_id}}"/></td>
                                    <td><a href="{{ URL::route("admin.role.edit", array('role' => $r->_id)) }}">{{$r->_id}}</a></td>
                                    <td><a href="{{ URL::route("admin.role.edit", array('role' => $r->_id)) }}">{{$r->name}}</a></td>
                                    <td>{{$r->display_name}}</td>
                                    <td>{{$r->created_at}}</td>
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