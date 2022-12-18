@extends('layouts.dashboard-layout')
  @section('title' , 'Post')
 
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
        <h3 class="card-title">Edit Post</h3>
      </div>
      <!-- /.card-header -->
        <!-- form start -->
        <form  method="post" action="{{route('posts.update' ,['post' =>$post->id])}}">
          @method('PATCH')
          <div class="card-body">

            <div class="form-group">
              <label > Title</label>
              <input name="title" type="text" value="{{ old('title')}}" class="form-control"  placeholder="Title..">
            </div>
            <div>{{ $errors->first('title') }}</div>
            
            <div class="form-group">
              <label >Contnet</label>
              <input name="content" type="text" value="{{ old('content')}}" class="form-control"  placeholder="Content...">
            </div>
            <div>{{ $errors->first('content') }}</div>
          
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