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
              <h3 class="card-title">Name : {{$user->name}}</h3><br>
              <h4 class="card-title">E-mail : {{$user->email}}</h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <h5 class="card-title">Role</h5>
              <p class="card-text">
                  @if ($user->role)
                          <span class="badge badge-primary " >
                              {{ $user->role->name}}
                          </span>
                      
                  @endif
              </p>
             
  
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