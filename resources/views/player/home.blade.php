<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
@extends ('header1')

@section('content')
<h1> Welcome to Fatventures! </h1>
<div class ='playerWrapper'>
    <div class='playerContainer'>
        The player
    </div>

    <div class='playerStats'>
        <h2>Player's Stats</h2>
    </div>
</div>

<div class='menuWrapper'>
    <input id='actionBicepCurl' type='button' value='Bicep curls'/>
    <input id='actionPushUp' type='button' value='Push ups'/>
    <input id='actionSitUp' type='button' value='Sit ups'/>
    <input id='actionPlank' type='button' value='Plank'/><br>
    <input id='actionShop' type='button' value='Store' />
    <input id='actionGym' type ='button' value='Gym' />
</div>
<div id='infoBox'>
    
</div>
@stop

<script type='text/javascript'>
    $(document).ready(function(){
        $('#actionBicepCurl').on('click', function(){
            actionBicepCurl();
        });
        $('#actionPushUp').on('click', function(){
           $("#infoBox").text("You just did 10 push ups!"); 
        });
        $('#actionSitUp').on('click', function(){
           $("#infoBox").text("You just did 10 sit ups!"); 
        });
        $('#actionPlank').on('click', function(){
           $("#infoBox").text("You just planked for 10 seconds!"); 
        });
        $('#actionShop').on('click', function(){
            window.location.href = 'store';
        });
        $('#actionGym').on('click', function(){
            window.location.href = 'gym';
        });
    });
</script>