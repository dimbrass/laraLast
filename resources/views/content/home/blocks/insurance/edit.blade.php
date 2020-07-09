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
                    <a href="/content/home/page/{{ $block->page['id'] }}">Show</a>
                    <br><hr>
                    <h4>Home create</h4>
                    <form name="create" action="{{ route('insurance.update', $block->id) }}" method="POST">
                        @csrf               
                        @method('PUT')     
                        <label>name</label>
                        <input name="page_id" style="width: 100%" value="{{ $block->page_id }}">
                        <br>
                        <label>title</label>
                        <input name="link" style="width: 100%" value="{{ $block->link }}">
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
