@extends('layouts.master')

{{-- define a section called title
 show book 
 --}}
@section('title')
    Developer's Best Friend
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/randomUserTool.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
 	<div class="container">
        <div class="content">
            <h1>Random Users Tool</h1>
            <div class="jumbotron">
                <h1>Generate some Random Users for your page...</h1>
                <p>How many random users do you want?
                </p>
               
                   
            </div>
            <div class="randomUser">
                <div class="col-lg-6">
                  <form method="POST" action="/randomUserPage/output">
                    <input type='hidden' value='{{ csrf_token() }}' name='_token'>
                        <div class="form-group">
                            <label for="number">Number of Users</label>
                            <input type="number" class="form-control" id="numberOfUsers" placeholder="Number of Users" name="users">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input name="address" type="checkbox"> Include Address
                            </label>
                            <br>
                            <label>
                            <input name="phoneNumber" type="checkbox"> Include Phone Number
                            </label>
                        </div>
                    <button type="submit" class="btn btn-primary">Get Random Users</button>
                
                </form>
                <br>
                <button type="back" class="btn btn-primary" id="home">Go Back</button>
       
                </div>

                <div class="col-lg-6">
                    <div id="result">
         
                        @if (isset($users))
                            @foreach($users as $user)
                                <p>
                                    {{ $user["name"] }}
                                    <br>    
                                    @if (isset($user["address"]))
                                        {{ $user["address"] }}
                                        <br>
                                    @endif    

                                    @if (isset($user["phoneNumber"]))
                                        {{ $user["phoneNumber"] }}
                                        <br>
                                    @endif    
                    
                                </p>
                            @endforeach
                        @endif
             
                    </div>
                </div>
            </div>
         
            
            <br>
            
            <br>
            
        </div>
    </div>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/randomUsers.js"></script>
@stop
