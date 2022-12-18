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
        <h3 class="card-title">New Role</h3>
      </div>
      <!-- /.card-header -->
        <!-- form start -->
        <form  method="post" action="{{route('roles.store')}}">
          <div class="card-body">

            <div class="form-group">
              <label for="name">Role name</label>
              <input type="text" name="name" class="form-control"  placeholder="Role name..." value="{{ old('name') }}" >
          </div>
            <div>{{ $errors->first('role_name') }}</div>
            
            <div class="row">
              @foreach (config('global.permissions') as $name => $value)
            <div class="form-group col-sm-4" >
              <label class="checkbox-inline" >
              <input type="checkbox" class="chk-box " name="permissions[]"   value="{{$name }}" >{{$name }}
            </label>
          </div>
              @endforeach
            </div>

            {{-- <div>{{ $errors->first('role_name') }}</div> --}}
            
             

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

 @endsection 
 
 