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
    <link href="/css/randomUsersTool.css" type='text/css' rel='stylesheet'>
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
            <form method="POST" action="/loremToolPage/output">
                <input type='hidden' value='{{ csrf_token() }}' name='_token'>
                <div class="form-group">
                    <label for="number">Number of Users</label>
                    <input type="number" class="form-control" id="users" placeholder="Number of Users" name="users">
                </div>
                <button type="submit" class="btn btn-primary">Get Random Users</button>
                
            </form>
            <br>
            <div id="result">
                @if (isset($users))
                    @foreach($users as $user)
                        <p>
                            {{ $user[0] }}
                            <br>
                            {{ $user[1] }}
                            <br>
                            {{ $user[2] }}
                        </p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/welcome.js"></script>
@stop
