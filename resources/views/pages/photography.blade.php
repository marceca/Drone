@extends('layouts.app')

@section('head')

@stop

@section('content')

{{-- <div id="links">
    <a href="images/imgur.jpg" title="imgur">
        <img src="images/thumbnails/imgur.jpg" style="height:50px; width: 50px;" alt="alt">
    </a>
    <a href="images/fish.jpg" title="Apple">
        <img src="images/thumbnails/fish.jpg" style="height:50px; width: 50px;" alt="Apple">
    </a>
    <a href="images/printer.jpg" title="Orange">
        <img src="images/thumbnails/printer.jpg" style="height:50px; width: 50px;" alt="Orange">
    </a>
</div> --}}

<div class="container">
    <ul class="row">
        <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
            <img src="images/fish.jpg">
        </li>
        <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
            <img src="images/imgur.jpg">
        </li>
    </ul>
</div>

@stop

@section('footer')
<script
    src="https://code.jquery.com/jquery-3.0.0.js"
    integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="
    crossorigin="anonymous">
</script>

<script src="javascipt/jquery.bsPhotoGallery.js"></script>

<script>
    $('ul.first').bsPhotoGallery({
        "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
        "hasModal" : true
    });
</script>
@stop