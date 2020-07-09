@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">                

                    <a href="/content/home/page">All pages</a> <br>   
                    <a href="/content/home/page">Page with all blocks</a> <br>             
                    <hr>

                    Блок:
                    <table class="table table-bordered table-condensed table-striped">
                        @foreach($insurance as $item)
                        <tr>
                            <td> Страница: <br>
                                id = {{$item->page['id'] }}  <br>
                                name: {{$item->page['name'] }}  <br> 
                                title: {{$item->page['title'] }}
                            </td>
                            <td>    
                                page_id: {{$item['page_id'] }} <br> 
                                link: {{$item['link'] }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <form action="{{ route('insurance.create') }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-primary btn-sm" type="submit">Create</button>
                                    </form>
                                            
                                    <form action="{{ route('insurance.show', $item['id']) }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-success btn-sm" type="submit">Show</button>
                                    </form>
                                
                                    <form action="{{ route('insurance.edit', $item['id']) }}" method="GET">
                                        @csrf @method('GET')
                                        <button class="btn btn-warning btn-sm" type="submit">Edit</button>
                                    </form>

                                    <form action="{{ route('insurance.destroy', $item['id']) }}" method="post">
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
