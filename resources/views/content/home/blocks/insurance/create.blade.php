@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">
                    <a href="/content/home/page">Home index</a> 
                    <br><hr>
                    <h4>insurance create</h4>

                    <form name="create" action="{{ route('insurance.store') }}" method="POST">
                        @csrf                    
                        <label>page_id</label>
                        <input name="page_id" style="width: 100%">
                        <br>
                        <label>link</label>
                        <input name="link" style="width: 100%">
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
