@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-striped">
                            <thead>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>TITLE</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                @foreach($pages as $row)
                                <tr>
                                    <td>{{$row->id }}</td>
                                    <td>{{$row->name }}</td>
                                    <td>{{$row->title }}</td>
                                    <td>                                    
                                        <form action="{{ route('page.show', $row->id) }}" method="GET">
                                            @csrf @method('GET')
                                            <button class="btn btn-success btn-block btn-sm" type="submit">Show</button>
                                        </form>
                                    
                                        <form action="{{ route('page.edit', $row->id) }}" method="GET">
                                            @csrf @method('GET')
                                            <button class="btn btn-warning btn-block btn-sm" type="submit">Edit</button>
                                        </form>

                                        <form action="{{ route('page.destroy', $row->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger btn-block btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <form action="{{ route('page.create') }}" method="GET">
                        @csrf @method('GET')
                        <button class="btn btn-primary btn-block btn-sm" type="submit">Create</button>
                    </form>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
