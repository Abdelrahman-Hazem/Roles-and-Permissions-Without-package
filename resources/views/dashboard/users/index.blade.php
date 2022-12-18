@extends('layouts.dashboard-layout')

    {{-- title --}}
  @section('title' , 'Users')


  {{-- content --}}
  @section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li> --}}
           <a href="{{route('users.create')}}" <li class="btn btn-primary">New Admin</li></a>

          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email(s)</th>
                  <th>Role </th>
                  <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                  @isset($users)
                  @foreach ($users as $user)
                  <tr>
                    
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name?? 'None'}}</td>
                    <td> 
                      {{-- show user --}}
        <a  href="{{route('users.show' ,['user'=>$user->id])}}" ><i class="fa fa-eye"></i></a>

                      <!-- Edit button -->
        <a  href="{{route('users.edit' ,['user'=>$user->id])}}" ><i class="fa fa-edit"></i></a>
                          
                           <!-- Delete button -->
<form method="post" action="{{route('users.destroy',['user'=>$user->id])}}">
	@method('delete')
<button type="submit" ><i class="fas fa-trash-alt"></i></button>
@csrf 
</form>
      </td>
                  </tr>
                  @endforeach      
                  @endisset
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

 @endsection 