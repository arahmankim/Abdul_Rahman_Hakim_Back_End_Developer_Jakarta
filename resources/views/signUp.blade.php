@extends('navbar')

@section('document_title', 'sign up')

@section('body')
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Sign Up</p>
    {{-- enctype --}}
    <form method="POST" enctype="multipart/form-data" action="/storeBike" class="d-flex flex-column align-items-center">
            {{-- CSRF --}}
            @csrf
            <div class="mb-3 w-100">
                <label for="InputUserName" class="form-label">User Name</label>
                <input type="text" class="form-control" name="userNameValue" id="exampleInputUsername" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" class="form-control" name="emailValue" id="exampleInputEmail">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="passwordValue" id="exampleInputPassword">
            </div>
            {{-- <div class="mb-3 w-100">
                <label for="inputFl">FL User</label>
                <select name="flUser" class="form-select mt-2" aria-label="Default select example">
                    {{-- options --}}
                    {{-- @foreach ($brands as $b)
                        <option value="{{$b->brandId}}">{{$b->brandName}}</option>
                    @endforeach
                </select>
            </div>  --}}

            {{-- error message --}}

            <button type="submit" class="btn btn-success">Sign Up</button>
    </form>
</div>

@endsection
