@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Class</h1>
          </div>
          <div class="col-sm-6 ">
            <a href="{{ url('admin/assign_subject/add') }}"class="btn btn-primary float-sm-right">Add New Assign Subject</a>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Admin List</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col -->
          <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Subject Search</h3>
                </div>
                <div class="card-body">
                  <form action="" method="get">
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label>Name</label>
                          <input type="text" class="form-control" value="{{ Request::get('name')}}" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="text" class="form-control" value="{{ Request::get('email')}}" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="exampleInputEmail1">Created Date</label>
                          <input type="date" class="form-control" value="{{ Request::get('date')}}" name="date" placeholder="">
                        </div>
                        <div class="form-group col-md-3" >
                          <button type="submit" class="btn btn-primary" style="margin-top: 32px;">Search</button>
                          <a href="{{ url('admin/assign_subject/list')}}" class="btn btn-success" style="margin-top: 32px;">Reset</a>
                        </div>
                      </div>
                    </form> 
                </div>
            </div>







          @include('_message')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Assign Subject List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Create Date</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                  <tbody>

                  </tbody>
                </table>
                    <div style="padding:10px; float: right;">
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
 
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection
