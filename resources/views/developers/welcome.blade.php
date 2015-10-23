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
    
@stop


@section('content')
 	<div class="container">
        <div class="content">
            <h1>Developer's Best Friend</h1>
            <div class="jumbotron">
                <h1>Are you building a new application?</h1>
                <p>Have no fear. The Developer's Best Friend is here! This is a tool that allows you to generate lorem ipsum text as well as random users.
                    Feel free to use this as a way to make development easier.
                </p>
                <p>To use one of the tools, just click on one of the buttons below to give it a go!</p>
                <p>
                  Here is a link to a page that describes more about Lorem Ipsum texts ad why we use them.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="http://www.lipsum.com/" role="button">What's Lorem Ipsum?</a>
                </p>
            </div>
            <button type="button" class="btn btn-primary" id="lorem">Lorem Ipsum Text</button>
            <button type="button" class="btn btn-primary" id="users">Random Users</button>
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
