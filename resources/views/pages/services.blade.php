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
        color: black;
    }
</style>
@stop

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center"><h3>Safety First</h3></div>

        <div class="panel-body">
            <p>UpHere is fully insured. We conduct our work responsibly and in accordance with current Federal
            Aviation Administration regulations, as specified by the National Transportation Safety Board.</p>
        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center"><h3>Services</h3></div>

        <div class="panel-body">
            <ul>
                <li>Real Estate</li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Landscrape&nbsp;&nbsp;<span class="right-caret"></span></a>
                    <ul class="dropdown-menu rightMenu" style="box-shadow: none; border: none;">
                        <li>Photography</li>
                        <li>Videography</li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events&nbsp;&nbsp;<span class="right-caret" style="hover: underline;"></span></a>
                    <ul class="dropdown-menu rightMenu">
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;Community</li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;Sports</li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;Weddings</li>
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