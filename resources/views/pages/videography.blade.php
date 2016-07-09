@extends('layouts.app')

@section('head')
<style>

h1, h2 {
    text-align: center;
    margin-bottom: 25px;
}

video{
    display: block;
    margin: 0 auto;
}

</style>
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center"><h1>Check out some of our videos!</h1></div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center"><h2>Little Jason Bourne hurt no body</h2></div>

            <div class="panel-body">
                <div class="col-md-12 center-block">
                    <video style="width:90%" controls>
                        <source src="videos/trailer1.mov" type="video/mp4">
                    </video>
                </div>
            </div>
            <footer>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;this is a trailer of jason Bourne read the title</p>
            </footer>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center"><h2>Little clip hurt no body</h2></div>

            <div class="panel-body">
                <div class="col-md-12 center-block">
                    <video style="width:90%" controls>
                        <source src="videos/clip.mov" type="video/mp4">
                    </video>
                </div>
            </div>
            <footer>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;This is actually a video Joe made WOW</p>
            </footer>
        </div>
    </div>
</div>
@stop