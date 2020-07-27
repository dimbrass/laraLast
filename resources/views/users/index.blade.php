@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Content manager</div>

                <div class="card-body">             
                    <form name="name" action="/users" style="text-align: right">
                    
                        <label>Name: </label>
                        <input name="name" value="{{ request()->name }}"> <br>

                        <label>Birthday: </label>
                        <input name="birthday" value="{{ request()->birthday }}"> 
                        <br>
                        
                        <label>is_active: </label> <br>
                        Yes <input name="is_active" type="radio" value="1" {{ request()->is_active == '1' ? 'checked' : '' }}>   
                        No <input name="is_active" type="radio" value="0" {{ ! request()->is_active == '1' ? 'checked' : '' }}>    
                        <br>
                        <br>                       
                        Gender:
                        <select name="gender" size="1">
                            <option value="0" value="0" {{ request()->gender == '0' ? 'selected="selected"' : '' }} >female</option>
                            <option value="1" value="1" {{ request()->gender == '1' ? 'selected="selected"' : '' }} >male</option>
                        </select>
                        <br>
                        <br>
                        <input name="submit" type="submit" value="filter">
                    </form>   

                    Users:
                    <table class="table table-bordered table-condensed table-striped">
                        @foreach($users as $user)
                        <tr>
                            <td>    
                                {{ $user->name }}
                            </td>
                            <td>    
                                {{ $user->gender == '1' ? 'male' : 'female' }}
                            </td>
                            <td>    
                                {{ $user->info->birthday }}
                            </td>
                            <td>    
                                {{ $user->is_active == '1' ? 'active' : 'not active' }} <br>
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