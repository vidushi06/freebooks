@extends('admin.master')
@section('tittle','menuimage | Add menuimage')
@section('content')
 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MENU IMAGES ADD</h1>
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
                <h3 class="card-title">Add menu images</h3>

                 <div class="ml-auto">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bb">Add Images</button>
               
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
                      <th colspan="6" class="text-center">IMAGES</th>
                    </tr>
                  <tr>
                    <th>S no.</th>
                    <th>title</th>
                    <th>subtitle</th>
                    <th>price</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
          @foreach($data as $a)
            
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$a->ititle}}</td>
                      <td>{{$a->isubtitle}}</td>
                      <td>{{$a->iprice}}</td>
                    <td><img src="/upload/{{$a->image}}"></td>
                    <td>
                      <a href="{{url('menu/edit/'.$a->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('menu/delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
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



    <!-- image model -->
      <div class="modal fade" id="bb">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Images</h5>

                    <button type="button" class="btn" data-dismiss="modal">
                    <span >&times;</span></button>
        
                </div>
                    <div class="modal-body">
                    <form class="form-group" method="post" action="{{url('insert')}}" enctype="multipart/form-data">
                      @csrf

                    Title:
                    <input type="text" name="ititle" class="form-control" >
                    <br>
                    Subtitle:
                    <input type="text" name="isubtitle" class="form-control" >
                    <br>
                    Price:
                    <input type="text" name="iprice" class="form-control" >
                    <br>
                        
                    Image:
                    <input type="file" name="image">
                    <br><br>
                    <small>add upto 9 images at a time</small><br><br><br>
                    <input type="submit" name="submit" value="submit" class="btn btn-info" >
                    </form>
                   </div>
            </div>
        </div>
    </div>


 @endsection



