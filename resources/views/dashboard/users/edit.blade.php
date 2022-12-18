@extends('layouts.dashboard-layout')
  @section('title' , 'task1')
  @section('content')
 
   
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
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">DataTables</li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>
 
 <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit User</h3>
      </div>
      <!-- /.card-header -->
        <!-- form start -->
        <form  method="post" action="{{route('users.update' ,['user' =>$user->id])}}">
          @method('PATCH')
          <div class="card-body">

            <div class="form-group">
              <label > Name</label>
              <input name="name" type="text" value="{{$user->name}}" class="form-control"  placeholder="Enter Name">
            </div>
            <div>{{ $errors->first('name') }}</div>
            
            <div class="form-group">
              <label > E-mail</label>
              <input name="email" type="text" value="{{ $user->email}}" class="form-control"  placeholder="Enter E-mail">
            </div>
            <div>{{ $errors->first('email') }}</div>
            
            <div class="form-group">
              <label >Password</label>
              <input name="password" type="text"  class="form-control"  placeholder="Enter Password">
            </div>
            <div>{{ $errors->first('password') }}</div>

           

            <div class="form-group">
              <label for="role">Select Role</label>
              <select class="role form-control" name="role_id" >
                  <option value="">Select Role...</option>
                  @foreach ($roles as $role)
                      <option  value="{{$role->id}}">{{$role->name}}</option>                
                  @endforeach
              </select>          
          </div>
          <div>{{ $errors->first('role_id') }}</div>
      
       
      

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          @csrf
        </form>
    </div>
    <!-- /.card -->
   
 
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
