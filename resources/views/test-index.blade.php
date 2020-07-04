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

                    <h4>Тест индекс</h4>
                    
                    @foreach ($tests as $test)

                    <p>name: {{ $test->name }} , title: {{ $test->title }}</p>

                    @endforeach

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
