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

                    <h4>Создать новый структурный элемент</h4>

                    <form name="content-test" action="{{ route('test.store') }}" method="POST">
                        @csrf                    
                        <label>name</label>
                        <input name="name" style="width: 100%">
                        <br>
                        <label>title</label>
                        <input name="title" style="width: 100%">
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
