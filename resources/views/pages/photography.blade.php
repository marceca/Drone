@extends('layouts.app')

@section('head')
<link rel="stylesheet" type="text/css" href="jquery/jquery.bsPhotoGallery.css">
<style>
    ul {
        padding:0 0 0 0;
        margin:0 0 0 0;
    }
    .pictures {
        list-style:none;
        margin-bottom:25px;
    }
    ul li img {
        cursor: pointer;
    }
    div div div div img {
        max-height: 600px;
    }
    .modal-body{
        height:600px;
    }
</style>

@stop

@section('content')
<ul class="first">
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/imgur.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/fish.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/printer.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/prefer.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/british.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/truck.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/pic.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/cat.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/eye.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/house.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/bear.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12 pictures">
        <img src="images/superman.jpg">
    </li>
</ul>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop

@section('footer')

<script src="javascipt/jquery.bsPhotoGallery.js"></script>
<script src="/jquery/jquery.bsPhotoGallery.css"></script>

<script>
    $('ul.first').bsPhotoGallery({
        "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
        "hasModal" : true
    });
</script>
{{--
<script>
    $(document).ready(function(){
        $('li img').on('click',function(){
            var src = $(this).attr('src');
            var img = '<img src="' + src + '" class="img-responsive"/>';
            $('#myModal').modal();
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .modal-body').html(img);
            });
            $('#myModal').on('hidden.bs.modal', function(){
                $('#myModal .modal-body').html('');
            });
        });
    })
</script>
--}}
@stop