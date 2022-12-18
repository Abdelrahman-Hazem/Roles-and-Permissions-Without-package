@extends('layouts.dashboard-layout')

    {{-- title --}}
  @section('title' , 'Posts')


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
           <a href="{{route('posts.create')}}" <li class="btn btn-primary">New Post</li></a>
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
                  <th>Post</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>User</th>
                  <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                  @isset($posts)
                  @foreach ($posts as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>user</td>
                    <td> 


                      {{-- show post --}}
                      @can('show posts')
        <a  href="{{route('posts.show' ,['post'=>$post->id])}}" ><i class="fa fa-eye"></i></a>
     @endcan
                      <!-- Edit button -->
                      @can('edit posts')
        <a  href="{{route('posts.edit' ,['post'=>$post->id])}}" ><i class="fa fa-edit"></i></a>
     @endcan         
                           <!-- Delete button -->
                      @can('delete posts')
<form method="post" action="{{route('posts.destroy',['post'=>$post->id])}}">
	@method('delete')
<button type="submit" ><i class="fas fa-trash-alt"></i></button>
@csrf 
</form>
  @endcan
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