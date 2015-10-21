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
            <div class="lorem">
                <div class="col-lg-6">
                  <form method="POST" action="/loremToolPage/output">
                    <input type='hidden' value='{{ csrf_token() }}' name='_token'>
                    <div class="form-group">
                        <label for="number">Number of Paragraphs</label>
                        <input type="number" class="form-control" id="paragraphs" placeholder="Number of Paragraphs" name="number">
                    </div>
                    <button type="submit" class="btn btn-primary">Get Lorem Text</button>  
                    </form>
                    <br>
                    <button type="back" class="btn btn-primary" id="home">Go Back</button>
                </div>


                <div class="col-lg-6">
                   <img src="{{ URL::to('/') }}/lorem-ipsum.jpg" alt="lorem" height="220" width="500">
                </div>
            </div>
            <br>

            
        </div>
        <div id="result">
               
                @if (isset($paragraphs))
                    @foreach($paragraphs as $paragraph)
                        <p>{{ $paragraph }}</p>
                        <br>

                        <!--<p>{{ $paragraph }}</p>-->
                    @endforeach
                @endif
            
        </div>
    </div>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/loremTool.js"></script>
@stop
