@extends('admin.layouts.master')

@section('title')
    Users
@endsection


@section('content-header')
    <section class="content-header">
        <h1> Users </h1>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Users</h3>
                        {{-- Add New--}}
                        <a href="{{url('admin/user/create')}}" type="button" class="btn btn-success pull-right">
                            <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add new
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="adminsTable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{$user->id}} </td>

                                    <td> {{$user->name}} </td>

                                    <td> {{$user->phone_number}} </td>

                                    <td>
                                        <a title="Edit" href="{{url('admin/user/' . $user->id . '/edit')}}" type="button" class="btn btn-primary">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <form class="inline" action="{{url('admin/user/' . $user->id .'/delete')}}" method="POST">
                                            {{ method_field('DELETE') }} {!! csrf_field() !!}
                                            <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete Admin Data?')" type="button"
                                                    class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

