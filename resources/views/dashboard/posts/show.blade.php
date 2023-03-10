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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title : {{$post->title}}</h3><br>
            </div>
            <!-- /.card-header -->

            <!-- card-body -->
            <div class="card-body">
                <h4 class="card-title">Content : {{$post->content}}</h4>
                <p class="card-text">......</p>
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