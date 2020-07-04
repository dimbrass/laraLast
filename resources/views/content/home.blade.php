@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">

                    <a href="/content">Content manager</a>

                    <br><br><hr>

                    <h4>Home index</h4>
                    
                    @foreach ($homes as $home)

                    <p>name: {{ $home->name }} , title: {{ $home->title }}</p>

                    @endforeach
                    

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
