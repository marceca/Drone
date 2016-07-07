@extends('layouts.app')

@section('head')
<style>
    .rightMenu {
        position:relative;
        float:right;
    }
    .right-caret {

        border-bottom: 4px solid transparent;
        border-top: 4px solid transparent;
        border-left: 4px solid #000000;
        display: inline-block;
        height: 0;
        opacity: 1;
        width: 0;

    }
    .right
    {
        float:right;
    }
    ul li {
        list-style:none;
    }
    a {
        color: white;
    }
</style>
@stop

@section('content')
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center">Safety</div>

        <div class="panel-body">
            <p>UpHere is fully insured. We conduct our work responsibly and in accordance with current Federal
            Aviation Administration regulations, as specified by the National Transportation Safety Board.</p>
        </div>
    </div>
</div>


<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center">Services</div>

        <div class="panel-body">
            <ul>
                <li>Real Estate</li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Landscrape<span class="right-caret"></span></a>
                    <ul class="dropdown-menu rightMenu">
                        <li>Photography</li>
                        <li>Videography</li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<span class="right-caret"></span></a>
                    <ul class="dropdown-menu rightMenu">
                        <li>Community</li>
                        <li>Sports</li>
                        <li>Weddings</li>
                    </ul>
                </li>
                <li>Construction</li>
                <li>Marketing and Advertising</li>
            </ul>
        </div>
    </div>
</div>

@stop
{{--


Serving all of NJ and NY. Call today.

Real Estate
Landscape -> Landscape Design - Landscape Architecture
Construction
Marketing & Advertising
Events -> Community - Sports - Weddings

--}}