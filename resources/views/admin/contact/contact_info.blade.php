@extends('admin.master')
@section('tittle','add_blog | Add blog')
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
     <div class="card" style="overflow-y: auto;">
              <div class="card-header">
                <nav class="navbar navbar-expand-md">
                <h3 class="card-title">Gallery</h3>

                 <div class="ml-auto">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aa">Add blog</button>
               
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
                    <th>phone</th>
                    <th>email</th>
                    <th>location</th>
                    <th>about us</th>
                    <th>address</th>
                    <th>phone2</th>
                    <th>email2</th>
                    <th>monday</th>
                    <th>tue-fri</th>
                    <th>sat-sun</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
          @foreach($data as $a)
            
                    <tr>
                      <td>{{$i++}}</td>
                    <td>{{$a->phone}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->location}}</td>
                    <td>{{$a->aboutus}}</td>
                    <td>{{$a->address}}</td>
                    <td>{{$a->phonesec}}</td>
                    <td>{{$a->emailsec}}</td>
                    <td>{{$a->monday}}</td>
                    <td>{{$a->tuewed}}</td>
                    <td>{{$a->satsun}}</td>
                    <td>
                      <a href="{{url('contact/edit/'.$a->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('contact/delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
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
                    <h5 class="modal-title">Add to Gallery</h5>

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
                    phone:
                    <input type="text" name="phone" class="form-control" >
                    <br>
                    email:
                    <input type="text" name="email" class="form-control" >
                    <br>
                    location
                    <br>
                    <input type="text" name="location" class="form-control" >
                    <br>
                    aboutus:
                    <input type="text" name="aboutus" class="form-control" >
                    <br>
                    address:
                    <input type="text" name="address" class="form-control" >
                    <br>
                    phonesec:
                    <input type="text" name="phonesec" class="form-control" >
                    <br>
                    emailsec:
                    <input type="text" name="emailsec" class="form-control" >
                    <br>
                    days time:
                    monday:
                    <input type="text" name="monday" class="form-control" >
                    <br>
                    tue-wed:
                    <input type="text" name="tuewed" class="form-control" >
                    <br>
                    sat-sun:
                    <input type="text" name="satsun" class="form-control" >
                    <br>
                    <input type="submit" name="submit" value="submit" class="btn btn-info" >
                    </form>
                   </div>
            </div>
        </div>
    </div>




 @endsection



