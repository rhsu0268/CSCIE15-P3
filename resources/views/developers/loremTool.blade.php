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
    <link href="/css/loremTool.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
 	<div class="container">
        <div class="content">
            <h1>Lorem Ipsum Tool</h1>
            <div class="jumbotron">
                <h1>Generate some Lorem Ipsum text for your page...</h1>
                <p>How many paragraphs of Lorem Ipsum text do you want?
                </p>
               
                   
            </div>
            <form>
                <div class="form-group">
                    <label for="number">Number of Paragraphs</label>
                    <input type="number" class="form-control" id="paragraphNumber" placeholder="Number of Paragraphs">
                </div>
              <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Get Lorem Text</a>
            </form>

            <div id="result">
                @foreach($paragraphs as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
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
