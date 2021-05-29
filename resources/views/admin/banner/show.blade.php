@extends('admin.master')
@section('tittle','Banner | show Banner')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Banner</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <div class="card">
              <div class="card-header">
                <nav class="navbar navbar-expand-md">
                <h3 class="card-title">Banner</h3>
                 <div class="ml-auto">
                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aa">Add Banner</button> -->
                
                </div>
                </nav>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Tittle</th>
                    <th>Despriction</th>
                    <th>Image</th>
                    <!-- <th>Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
         
            
                    <tr>
                     
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td> <img src="/upload/{{$data->image}}" style="width: 100px;height: 100px;"></td>
                   
                    
                  </tr>
          
                  </tbody>
                 
                </table>
              </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection