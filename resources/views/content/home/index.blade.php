@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">                

                    Страница:
                    <table class="table table-bordered table-condensed table-striped">
                        <tr>
                            <td>{{$page['id'] }}</td>
                            <td>    
                                name: {{$page['name'] }}  <br>
                                title: {{$page['title'] }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <form action="{{ route('page.create') }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-primary btn-sm" type="submit">Create</button>
                                    </form>
                                            
                                    <form action="{{ route('page.show', $page['id']) }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-success btn-sm" type="submit">Show</button>
                                    </form>
                                
                                    <form action="{{ route('page.edit', $page['id']) }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-warning btn-sm" type="submit">Edit</button>
                                    </form>

                                    <form action="{{ route('page.destroy', $page['id']) }}" method="post">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                                  

                    Блоки:
                    <table class="table table-bordered table-condensed table-striped">
                        @foreach($pageBlocks as $pageBlock)
                        <tr>
                            <td>{{$pageBlock['id'] }}</td>
                            <td>    
                                title: {{$pageBlock['link'] }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <form action="{{ route('insurance.create') }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-primary btn-sm" type="submit">Create</button>
                                    </form>
                                            
                                    <form action="{{ route('insurance.show', $page['id']) }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-success btn-sm" type="submit">Show</button>
                                    </form>
                                
                                    <form action="{{ route('page.edit', $page['id']) }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-warning btn-sm" type="submit">Edit</button>
                                    </form>

                                    <form action="{{ route('page.destroy', $page['id']) }}" method="post">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>                  
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
