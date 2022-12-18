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
        <h3 class="card-title">Edit Role</h3>
      </div>
      <!-- /.card-header -->
        <!-- form start -->
        <form  method="post" action="{{route('roles.update' ,['role' =>$role->id])}}">
          @method('PATCH')
          <div class="card-body">

            <div class="form-group">
              <label for="role_name">Role name</label>
              <input type="text" name="name" class="form-control"  placeholder="Role name..." value="{{ $role->name }}">
          </div>
            <div>{{ $errors->first('name') }}</div>
         
            <div class="row">
              @foreach (config('global.permissions') as $name =>$value)
                  <div class="form-group col-sm-4">
                    <label class="checkbox-inline">
                      <input type="checkbox" class="chk-box" name="permissions[]" value="{{$name}}" 
                      {{in_array($name,$role->permissions)? 'checked' :''}}
                      >{{$value}}
                    </label>
                  </div>
              @endforeach
            </div>
            <div>{{ $errors->first('permissions') }}</div>
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
 @section('single_page_script')
 <script>
  $(document).ready(function(){
      $('#role_name').keyup(function(e){
          var str = $('#role_name').val();
          str = str.replace(/\W+(?!$)/g, '-').toLowerCase();//rplace stapces with dash
          $('#role_slug').val(str);
          $('#role_slug').attr('placeholder', str);
      });
  });
  
</script>
 @endsection