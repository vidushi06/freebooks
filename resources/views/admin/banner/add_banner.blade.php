@extends('admin.master')
@section('tittle','Banner | Add Banner')
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aa">Add Banner</button>
               
                </div>
                </nav>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 @if(session('message'))

         <p class ="alert alert-success">
          {{session('message')}}
         </p>
          
    @endif
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S no.</th>
                    <th>Tittle</th>
                    <th>Despriction</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
          @foreach($data as $a)
            
                    <tr>
                      <td>{{$i++}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->description}}</td>
                    <td> <img src="/upload/{{$a->image}}" style="width: 100px;height: 100px;"></td>
                    <td>
                      <a href="{{url('banner/edit/'.$a->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('banner/show/'.$a->id)}}" class="btn btn-warning">Show</a>
                      <a href="{{url('banner/delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                    
                  </tr>
          @endforeach
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="aa">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Banner</h5>

                    <button type="button" class="btn" data-dismiss="modal">
                    <span >&times;</span></button>
        
                </div>
                    <div class="modal-body">
                    <form class="form-group" method="post" action="{{url('insert')}}" enctype="multipart/form-data">
                      @csrf
                        @if(session('message'))

                          <p class ="alert alert-success">
                              {{session('message')}}
                          </p>
          
                        @endif
                    Title:
                    <input type="text" name="title" class="form-control" >
                    <br>
                    Description:
                    <input type="text" name="description" class="form-control" >
                    <br>
                    Image:<br>
                    <input type="file" name="image">
                    <br><br>
                    <input type="submit" name="submit" value="submit" class="btn btn-info" >
                    </form>
                   </div>
            </div>
        </div>
    </div>
 @endsection

