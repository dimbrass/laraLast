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
                    <a href="/content/home/page/{{ $page->id }}">Show</a>
                    <br><hr>
                    <h4>Home create</h4>
                    <form name="create" action="{{ route('page.update', $page->id) }}" method="POST">
                        @csrf               
                        @method('PUT')     
                        <label>name</label>
                        <input name="name" style="width: 100%" value="{{ $page->name }}">
                        <br>
                        <label>title</label>
                        <input name="title" style="width: 100%" value="{{ $page->title }}">
                        <br>
                        <br>                        
                        <button type="submit" class="btn btn-primary">Сохранить</button> 
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
