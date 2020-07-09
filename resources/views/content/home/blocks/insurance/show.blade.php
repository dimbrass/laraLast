@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">
                    <a href="/content/home/page">Index</a> <br>
                    <a href="/content/home/page/create">Create</a> <br>
                    <a href="/content/home/page/1/edit">Edit</a>

                    <br><br><hr>

                    <h4>insurance show</h4>

                    <p>page_id: {{ $block->page_id }} , link: {{ $block->link }}</p>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
