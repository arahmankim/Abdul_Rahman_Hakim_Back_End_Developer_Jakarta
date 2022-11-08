@extends('navbar')

@section('document_title', 'admin')

@section('body')
    <div class="container-fluid">
        @foreach ($lowonganData as $l)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$l->namaPosisi}}</h5>
                <p class="card-text">{{$l->jabatan}}</p>
                <p class="card-text">{{$l->slot}}</p>
            </div>
            <form action="delete/{{$l->id}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <button type="submit">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
@endsection
