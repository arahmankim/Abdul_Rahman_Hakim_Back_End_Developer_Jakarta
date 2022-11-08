@extends('navbar')

@section('document_title', 'home')

@section('body')
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Sign In</p>
    {{-- enctype --}}
    <form method="POST" enctype="multipart/form-data" action="/storeBike" class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            @csrf
            <div class="mb-3 w-100">
                <label for="InputUserName" class="form-label">User Name</label>
                <input type="text" class="form-control" name="userNameValue" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="text" class="form-control" name="passwordValue" id="exampleInputPassword1">
            </div>
            <div class="text-center text-white rounded-5 m-2 pt-3" style="">
                <button type="submit" class="btn btn-success">Sign In</button>
                <button type="submit" class="btn btn-success"><a class="nav-link text-white" href="/signUp">Sign Up</a></button>
            </div>
    </form>
@endsection
