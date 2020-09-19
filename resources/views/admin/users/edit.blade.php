@extends('admin.layouts.master')


@section('content-header')
  <section class="content-header">
    <h1> Users </h1>
  </section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Users</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin/user/'.$user->id.'/update')}}" method="POST" >
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="box-body">

        <div class="col-md-12">

          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> Name:</label>
            <div class="col-sm-6">
              <input type="text" autocomplete="off" class="form-control"
                placeholder="Enter name" name="name" required value="{{$user->name}}">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> Phone:</label>
            <div class="col-sm-6">
              <input type="text"  class="form-control" placeholder="Enter phone" name="phone_number" value="{{$user->phone_number}}">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="title"> Password :</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" name="password" required value="{{$user->password}}">
            </div>
          </div>

        </div>
        <br>
      </div>
      <div class="box-footer">
        <a href="{{url('/admin')}}" type="button" class="btn btn-default">Cancel &nbsp;
          <i class="fa fa-remove" aria-hidden="true"></i>
        </a>
        <button type="submit" class="btn btn-primary pull-right">Save &nbsp; <i class="fa fa-save"></i></button>
      </div>
    </form>
  </div>
</section>
@endsection
