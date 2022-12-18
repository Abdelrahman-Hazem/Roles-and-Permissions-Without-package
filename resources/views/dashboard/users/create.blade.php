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
        <h3 class="card-title">New Admin</h3>
      </div>
      <!-- /.card-header -->
        <!-- form start -->
        <form  method="post" action="{{route('users.store')}}">
          <div class="card-body">

            <div class="form-group">
              <label > Name</label>
              <input name="name" type="text" value="{{ old('name')}}" class="form-control"  placeholder="Name..">
            </div>
            <div>{{ $errors->first('name') }}</div>
            
            <div class="form-group">
              <label >E-mail</label>
              <input name="email" type="text" value="{{ old('email')}}" class="form-control"  placeholder="Email...">
            </div>
            <div>{{ $errors->first('email') }}</div>
            
            
            <div class="form-group">
              <label >Password</label>
              <input name="password" type="password"  class="form-control"  placeholder="Password...">
            </div>
            <div>{{ $errors->first('password') }}</div>
            
           
         
      <div class="col md-4">
        <div class="form-groub">
          <label for="projectinput1">Choose Role</label>
          <select name="role_id">
            <optgroup label="please choose role">
            @if ($roles && $roles->count() > 0)
            @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option> 
            @endforeach  
            @endif
          </optgroup>
          </select>
        </div>
      </div>
            
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
