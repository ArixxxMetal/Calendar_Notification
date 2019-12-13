@extends('layouts.app')

@section('content')
            <div class="justify-content-start">
                <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
            </div>
<div class="container">

    <div class="row justify-content-center">
        <div id="main">

        </div>
                            <!-- begin left SideBar -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Agendar</a>
  <a href="#">Registro</a>s
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
                    <!-- end left SideBar -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
